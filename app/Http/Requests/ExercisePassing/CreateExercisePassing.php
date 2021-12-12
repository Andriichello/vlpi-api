<?php

namespace App\Http\Requests\ExercisePassing;

use App\Enums\PassingStatus;
use Illuminate\Foundation\Http\FormRequest;

class CreateExercisePassing extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'status' => [
                'required',
                'string',
                'in:' . PassingStatus::Draft . ',' . PassingStatus::Uploaded,
            ],
            'exercise_id' => [
                'required',
                'integer',
                'exists:exercises,id',
            ],
            'choice_column' => [
                'present',
                'array',
            ],
            'choice_column.*.choice_id' => [
                'required',
                'integer',
                'exists:choices,id',
            ],
            'choice_column.*.column_id' => [
                'required',
                'integer',
                'exists:exercise_columns,id',
            ],
            'choice_column.*.order' => [
                'required',
                'integer',
            ],
        ];
    }
}
