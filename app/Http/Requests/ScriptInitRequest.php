<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScriptInitRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "name" => "required|string|min:3|max:255",
            "description" => "required|string|min:3|max:255",
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Toto pole je povinné.',
            '*.string' => 'Toto pole musí být text.',
            '*.min' => 'Toto pole musí mít minimálně 3 znaky.',
            '*.max' => 'Toto pole může mít maximálně 255 znaků.',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
