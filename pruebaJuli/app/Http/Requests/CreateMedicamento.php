<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMedicamento extends FormRequest
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
            'nombre'=>'required|string|max:255',
            'marca'=>'required|string|max:255',
            'laboratorio'=>'required|string|max:255',
            'dosis'=>'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ];
    }
    public function medicamentos(){
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.alpha' => 'El nombre solo debe contener letras.',
            'marca.required' => 'La marca es obligatoria.',
            'marca.alpha' => 'La marca solo debe contener letras.',
            'laboratorio.required' => 'El laboratorio es obligatorio.',
            'laboratorio.alpha' => 'El laboratorio solo debe contener letras.',
            'dosis.required' => 'La dosis es obligatorio.',
            'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
            'mensaje.max' => 'El mensaje no puede exceder los 200 caracteres.'
        ];
    }
}
