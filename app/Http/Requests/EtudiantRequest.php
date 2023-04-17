<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nom' => 'required',
            'age' => 'required|integer',
            'dateN' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est obligaoire',
            'age.required' => 'Age obligatoire',
            'age.integer' => 'Unique valeur en numerique',
            'dateN.required' => 'La date de naissance est obligatoire',
            'dateN.date' => 'Format de la date (mois / jour / annee)',
        ];
    }
}
