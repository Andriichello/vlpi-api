<?php

namespace Database\Seeders;

use App\Enums\PassingStatus;
use App\Models\Choice;
use App\Models\ExerciseColumn;
use App\Models\ExerciseColumnPassing;
use App\Models\ExercisePassing;
use Illuminate\Database\Seeder;

class  ExercisePassingSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            /** @var ExercisePassing $passing */
            $passing = ExercisePassing::factory()
                ->create(['status' => PassingStatus::Draft]);

            $exercise = $passing->exercise;
            foreach ($exercise->columns as $column) {
                $this->fillColumnPassings($passing, $column);
            }
        }
    }

    /**
     * @param ExercisePassing $passing
     * @param ExerciseColumn $column
     *
     * @return void
     */
    public function fillColumnPassings(ExercisePassing $passing, ExerciseColumn $column): void
    {
        $usedChoices = $passing->columnPassings()
            ->pluck('choice_id')
            ->all();

        for ($i = 0; $i < $column->max_choices; $i++) {
            $query = $column->choiceColumns()
                ->whereNotIn('choice_id', $usedChoices);

            // add right choice
            if (rand(0, 1) == 1) {
                /** @var Choice|null $rightChoice */
                $rightChoice = $query->where('order', $i + 1)
                    ->first();

                if ($rightChoice) {
                    continue;
                }
            }

            ExerciseColumnPassing::query()
                ->create([
                    'choice_id' => ($rightChoice ?? $query->first())->id,
                    'column_id' => $column->id,
                    'passing_id' => $passing->id,
                    'order' => $i + 1,
                ]);
        }
    }
}
