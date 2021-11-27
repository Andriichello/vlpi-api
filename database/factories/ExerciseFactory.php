<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Spatie\Permission\Models\Role;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
    {
        /** @var Role $role */
        $role = Role::findByName('admin');

        /** @var User|null $user */
        $user = $role->users()
            ->inRandomOrder()
            ->first();

        if (!$user) {
            $user = User::factory()
                ->create();

            $role->users()->attach($user);
        }

        return [
            'user_id' => $user->id,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(20),
            'max_choices' => rand(3, 10),
            'type' => 'ordering',
        ];
    }
}
