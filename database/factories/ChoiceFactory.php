<?php

namespace Database\Factories;

use App\Models\Choice;
use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChoiceFactory extends Factory
{
    protected $model = Choice::class;

    public function definition()
    {
//        /** @var Exercise $exercise */
//        $exercise = Exercise::query()
//            ->inRandomOrder()
//            ->first();
//
//        $exerciseId = $exercise?->id ?? Exercise::factory();

        return [
//            'exercise_id' => $exerciseId,
            'title' => $this->faker->word,
            'tooltip' => $this->faker->sentence(3),
        ];
    }
}
