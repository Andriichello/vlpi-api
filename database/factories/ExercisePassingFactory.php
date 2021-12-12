<?php

namespace Database\Factories;

use App\Enums\PassingStatus;
use App\Models\Exercise;
use App\Models\ExercisePassing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Role;

class ExercisePassingFactory extends Factory
{
    protected $model = ExercisePassing::class;

    public function definition()
    {
        $role = Role::query()
            ->where('name', 'student')
            ->firstOrFail();

        /** @var User|null $sutdent */
        $sutdent = User::query()
            ->where('role_id', $role->id)
            ->inRandomOrder()
            ->first();

        if (!$sutdent) {
            /** @var User $sutdent */
            $sutdent = User::factory()
                ->create(['role_id' => $role->id]);
        }

        /** @var Exercise|null $exercise */
        $exercise = Exercise::query()
            ->inRandomOrder()
            ->first();

        if (!$exercise) {
            $exercise = Exercise::factory()
                ->create();
        }

        return [
            'user_id' => $sutdent->id,
            'exercise_id' => $exercise->id,
            'status' => PassingStatus::Draft,
            'mark' => null,
        ];
    }
}
