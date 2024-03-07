<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'thumb' => 'nullable|url',
            'description' => 'nullable|max:5000',
            'technologies' => 'required|string|max:255',
            'start_date' => 'required|date',
            'last_update_date' => 'nullable|date',
            'total_hours' => 'nullable|numeric|max:999',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.max' => 'Il campo nome non può superare i 255 caratteri.',
            'thumb.url' => 'Il campo thumb deve essere un URL valido.',
            'description.max' => 'Il campo descrizione non può superare i 5000 caratteri.',
            'technologies.required' => 'Il campo tecnologie è obbligatorio.',
            'technologies.max' => 'Il campo tecnologie non può superare i 255 caratteri.',
            'start_date.required' => 'Il campo data di inizio è obbligatorio.',
            'start_date.date' => 'Il campo data di inizio deve essere una data valida.',
            'last_update_date.date' => 'Il campo data ultimo aggiornamento deve essere una data valida.',
            'total_hours.numeric' => 'Il campo ore totali deve essere un numero.',
            'total_hours.max' => 'Il campo ore totali non può superare 999.',
        ];
    }
}
