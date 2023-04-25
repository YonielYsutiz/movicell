<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'email'=>'email|required',
            'password'=>'required|min:5',
            'number_phone'=>'required'
        ];
    }

    public function messages(){
        return [
            'name'=>'El nombre es requerido',
            'email'=>'El email es requerido o necesita que ser un email valido y unico',
            'password'=>'La clave es requerida',
            'number_phone'=>'El numero de celular es requerido y unico'
        ];
    }
}
