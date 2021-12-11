<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use TCG\Voyager\Models\Role;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
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

        return [
            'user_id' => $admin->id,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(20),
            'max_choices' => rand(3, 10),
            'type' => 'ordering',
        ];
    }
}
