<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
            'rememberMe' => [],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Toto pole je povinné.',
            'email.email' => 'Prosím vyplňte email ve správném formátu.',
            'email.exists' => 'Uživatel s tímto emailem neexistuje.',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
