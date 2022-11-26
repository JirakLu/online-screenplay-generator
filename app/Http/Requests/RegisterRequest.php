<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "min:2", "max:150"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => [
                "required",
                "string",
                Password::min(8)->letters()->numbers()->mixedCase()->uncompromised(),
                "confirmed"
            ],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Toto pole je povinné.',

            'name.string' => 'Prosím vyplňte jméno ve správném formátu.',
            'name.min' => 'Vyplňené jméno je moc krátké.',
            'name.max' => 'Vyplňené jméno je moc dlouhé.',

            'email.email' => 'Prosím vyplňte email ve správném formátu.',
            'email.unique' => 'Účet s tímto emailem již existuje.',

            'password.string' => "Prosím vyplňte heslo ve správném formátu.",
            'password.min' => "Heslo musí mít alespoň osm znaků.",
            'validation.password.mixed' => "Heslo musí obsahovat alespoň jedno velké písmeno.",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
