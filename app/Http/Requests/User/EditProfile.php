<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class EditProfile extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'min:2',
                'max:100',
            ],
            'email' => [
                'string',
                'email',
                'unique:users,email'
            ],
            'password' => [
                'string',
                'min:8',
                'max:255',
            ],
            'confirm_password' => [
                'string',
                'min:8',
                'max:255',
                'required_with:password',
                'same:password',
            ],
        ];
    }
}
