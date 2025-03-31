<?php

namespace App\Http\Requests\Excel;

use Illuminate\Foundation\Http\FormRequest;

class ConvertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'cell' => ['required', 'regex:/^[A-Za-z]+[0-9]+$/'],
        ];
    }

    /**
     * Wiadomości walidacyjne.
     */
    public function messages(): array
    {
        return [
            'cell.required' => 'Pole komórki jest wymagane.',
            'cell.regex' => 'Niepoprawny format komórki (np. A1, B2, AA10).',
        ];
    }
}
