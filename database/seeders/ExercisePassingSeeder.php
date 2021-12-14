<?php

namespace Database\Seeders;

use App\Enums\PassingStatus;
use App\Models\ChoiceColumn;
use App\Models\Exercise;
use App\Models\ExerciseColumn;
use App\Models\ExerciseColumnPassing;
use App\Models\ExercisePassing;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use TCG\Voyager\Models\Role;

class  ExercisePassingSeeder extends Seeder
{
    public function run()
    {
        /** @var Role $role */
        $role = Role::query()
            ->where('name', 'student')
            ->firstOrFail();

        /** @var User[]|Collection $students */
        $students = User::query()
            ->where('role_id', $role->id)
            ->get();

        foreach ($students as $student) {
            /** @var Exercise[]|Collection $exercises */
            $exercises = Exercise::query()
                ->inRandomOrder()
                ->limit(rand(2, 5))
                ->get();

            foreach ($exercises as $exercise) {
                $this->createPassings($student, $exercise);
            }
        }

    }

    public function createPassings(User $user, Exercise $exercise): void
    {
        for ($i = rand(1, 3); $i > 0; $i--) {
            /** @var ExercisePassing $passing */
            $passing = ExercisePassing::query()
                ->create([
                    'user_id' => $user->id,
                    'exercise_id' => $exercise->id,
                    'status' => PassingStatus::Draft,
                    'mark' => null,
                ]);

            $exercise = $passing->exercise;
            foreach ($exercise->columns as $column) {
                $this->fillColumnPassings($passing, $column, rand(0, 1) == 1);
            }

            if (rand(0, 1) === 1) {
                $passing->status = PassingStatus::Uploaded;
                $passing->grade();
            }
        }
    }

    /**
     * @param ExercisePassing $passing
     * @param ExerciseColumn $column
     * @param bool $correctly
     *
     * @return void
     */
    public function fillColumnPassings(ExercisePassing $passing, ExerciseColumn $column, bool $correctly = false): void
    {
        $usedChoices = $passing->columnPassings()
            ->pluck('choice_id')
            ->all();

        for ($i = 0; $i < $column->max_choices; $i++) {
            $query = $column->choiceColumns()
                ->whereNotIn('choice_id', $usedChoices);

            // add right choice
            if ($correctly || rand(0, 1) == 1) {
                /** @var ChoiceColumn|null $rightChoiceColumn */
                $rightChoiceColumn = $query->where('order', $i + 1)
                    ->first();
            }

            ExerciseColumnPassing::query()
                ->create([
                    'choice_id' => ($rightChoiceColumn ?? $query->first())->choice_id,
                    'column_id' => $column->id,
                    'passing_id' => $passing->id,
                    'order' => $i + 1,
                ]);
        }
    }
}
