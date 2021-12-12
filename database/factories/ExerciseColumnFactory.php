<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\ExerciseColumn;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseColumnFactory extends Factory
{
    protected $model = ExerciseColumn::class;

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
            'max_choices' => $this->faker->numberBetween(3, 8),
        ];
    }

    /**
     * Attach to specified exercise.
     * @param Exercise $exercise
     *
     * @return Factory
     */
    public function withExercise(Exercise $exercise): Factory
    {
        return $this->state(
            function (array $attributes) use ($exercise) {
                return [
                    'exercise_id' => $exercise->id,
                ];
            }
        );
    }
}
