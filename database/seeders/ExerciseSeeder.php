<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\ChoiceColumn;
use App\Models\Exercise;
use App\Models\ExerciseColumn;
use App\Models\ExerciseInfo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class  ExerciseSeeder extends Seeder
{
    public function run()
    {
        /** @var Exercise[]|Collection $exercises */
        $exercises = Exercise::factory()
            ->hasColumns(1)
            ->count(5)
            ->create();

        $this->fill($exercises);

        /** @var Exercise[]|Collection $exercises */
        $exercises = Exercise::factory()
            ->hasColumns(2)
            ->count(3)
            ->create();

        $this->fill($exercises);

        /** @var Exercise[]|Collection $exercises */
        $exercises = Exercise::factory()
            ->hasColumns(3)
            ->count(2)
            ->create();

        $this->fill($exercises);
    }

    public function fill(Collection $exercises)
    {
        $exercises->each(function (Exercise $exercise) {
            $this->fillChoices($exercise);
            $this->fillInfo($exercise);
        });
    }

    public function fillInfo(Exercise $exercise)
    {
        ExerciseInfo::factory()
            ->count(rand(0, 2))
            ->create([
                'exercise_id' => $exercise->id,
            ]);
    }

    public function fillChoices(Exercise $exercise)
    {
        $exercise->columns()
            ->each(function (ExerciseColumn $column) use ($exercise) {
                $choicesCount = $column->max_choices + rand(1, 5);

                Choice::factory()
                    ->count($choicesCount)
                    ->create([
                        'exercise_id' => $exercise->id,
                    ]);

                $this->fillChoiceColumns($column);
            });
    }

    public function fillChoiceColumns(ExerciseColumn $column)
    {
        /** @var Choice[]|Collection $choices */
        $choices = $column->exercise->choices;

        for ($i = 0; $i < $column->max_choices; $i++) {
            /** @var Choice $choice */
            $choice = $choices->pop();

            ChoiceColumn::query()
                ->create([
                    'column_id' => $column->id,
                    'choice_id' => $choice->id,
                    'order' => $i + 1,
                ]);
        }
    }
}
