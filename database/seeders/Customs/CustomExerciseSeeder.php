<?php

namespace Database\Seeders\Customs;

use App\Models\Choice;
use App\Models\ChoiceColumn;
use App\Models\Exercise;
use App\Models\ExerciseColumn;
use App\Models\ExerciseInfo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use TCG\Voyager\Models\Role;

class  CustomExerciseSeeder extends Seeder
{
    public function run()
    {

        $role = Role::query()
            ->where('name', 'admin')
            ->firstOrFail();

        /** @var User|null $admin */
        $admin = User::query()
            ->where('role_id', $role->id)
            ->inRandomOrder()
            ->first();

        if (!$admin) {
            /** @var User $admin */
            $admin = User::factory()
                ->create(['role_id' => $role->id]);
        }

        $this->createExercise(
            $admin,
            [
                'title' => 'Automated testing: General',
                'description' => null,
                'min_mark' => 60,
                'type' => 'ordering',
            ],
            [
                null => [
                    'Maintenance',
                    'Setting up constructor',
                    'Write first test method',
                    'Runnig fact method',
                ],
                'Whole process' => [
                    'Test tool selection',
                    'Define scope of Automation',
                    'Planning, Design and Development',
                    'Test Execution',
                    'Maintenance',
                ],
                'Execution' => [
                    'Create a test project in your execution environment',
                    'Open test case/test suite',
                    'Check your test progress',
                    'Fill the report',
                ],
            ],
        );

        $this->createExercise(
            $admin,
            [
                'title' => 'Integration Testing: Process',
                'description' => null,
                'min_mark' => 60,
                'type' => 'ordering',
            ],
            [
                null => [
                    'Create test cases and use cases',
                    'Repeat the testing cycle until all bugs are fixed',
                    'Detect errors',
                    'Write a test plan',
                    'Run tests after unit integration',
                    'Retest the functionality after bug fixing',
                ],
                'Process' => [
                    'Write a test plan',
                    'Create test cases and use cases',
                    'Run tests after unit integration',
                    'Detect errors',
                    'Retest the functionality after bug fixing',
                    'Repeat the testing cycle until all bugs are fixed',
                ],
            ],
        );

        $this->createExercise(
            $admin,
            [
                'title' => 'Unit testing: Structure',
                'description' => null,
                'min_mark' => 60,
                'type' => 'ordering',
            ],
            [
                null => [
                    'Acknowledge',
                    'Alert',
                ],
                'General structure' => [
                    'Test setup',
                    'Setting up mocks',
                    'Calling tested service',
                    'Checking results',
                    'Fixing errors',
                ],
                'AAA' => [
                    'Arrange',
                    'Act',
                    'Assert',
                ],
            ],
        );
    }

    public function createExercise(User $user, array $exercise, array $columns)
    {
        $all = Arr::flatten($columns);

        /** @var Exercise $e */
        $e = Exercise::query()
            ->create([
                'user_id' => $user->id,
                'title' => $exercise['title'],
                'description' => $exercise['description'],
                'max_choices' => count($all),
                'min_mark' => $exercise['min_mark'],
                'type' => $exercise['type'],
            ]);

        foreach ($columns as $title => $choices) {
            $all = Arr::flatten($choices);

            if ($title !== null) {
                /** @var ExerciseColumn $column */
                $column = ExerciseColumn::query()
                    ->create([
                        'exercise_id' => $e->id,
                        'title' => $title,
                        'max_choices' => count($all),
                    ]);
            }

            for ($i = 0; $i < count($choices); $i++) {
                $ch = $choices[$i];

                /** @var Choice $choice */
                $choice = Choice::query()
                    ->create([
                        'exercise_id' => $e->id,
                        'title' => $ch,
                    ]);

                if ($title !== null) {
                    ChoiceColumn::query()
                        ->create([
                            'choice_id' => $choice->id,
                            'column_id' => $column->id,
                            'order' => $i + 1,
                        ]);
                }
            }
        }
    }
}
