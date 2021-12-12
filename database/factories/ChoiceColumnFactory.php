<?php

namespace Database\Factories;

use App\Models\Choice;
use App\Models\ChoiceColumn;
use App\Models\ExerciseColumn;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChoiceColumnFactory extends Factory
{
    protected $model = ChoiceColumn::class;

    public function definition()
    {
        /** @var Choice $choice */
        $choice = Choice::query()
            ->join('choice_column', function ($query) {
                return $query->whereNot('choice_column.choice_id', '!=', 'id');
            })
            ->inRandomOrder()
            ->first();

        if (!$choice) {
            $choice = Choice::factory()->create();
        }

        /** @var ExerciseColumn $column */
        $column = ExerciseColumn::query()
            ->where('exercise_id', $choice->exercise->id)
            ->inRandomOrder()
            ->first();

        /** @var int|null $order */
        $order = ChoiceColumn::query()
            ->where('column_id', $column->id)
            ->max('order');

        if ($order) {
            $order += 1;
        }

        return [
            'choice_id' => $choice->id,
            'column_id' => $column->id,
            'order' => $order,
        ];
    }
}
