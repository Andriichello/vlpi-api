<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Index extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'page' => 'integer|min:0',
            'perPage' => ['integer', 'between:1,100'],
            'filter' => ['array'],
            'include' => ['string'],
            'sort' => ['string'],
        ];
    }
}
