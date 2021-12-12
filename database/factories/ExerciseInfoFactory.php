<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\ExerciseInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseInfoFactory extends Factory
{
    protected $model = ExerciseInfo::class;

    public function definition()
    {
        /** @var Exercise $exercise */
        $exercise = Exercise::query()
            ->inRandomOrder()
            ->first();

        $exerciseId = $exercise?->id ?? Exercise::factory();

        return [
            'exercise_id' => $exerciseId,
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(20),
        ];
    }
}
