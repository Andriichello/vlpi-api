<?php

namespace App\Http\Requests\ExercisePassing;

use App\Enums\PassingStatus;
use Illuminate\Foundation\Http\FormRequest;

class EditExercisePassing extends FormRequest
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
                'string',
                'in:' . PassingStatus::Draft . ',' . PassingStatus::Uploaded,
            ],
            'choice_column' => [
                'required',
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
