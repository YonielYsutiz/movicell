<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnicalRequest extends FormRequest
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
    public function rules()
    {
        return [
            'firts_name'=>'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:technical,email',
            'strong_points' => 'nullable',
            'type_document' => 'required',
            'nro_document' => 'required|unique:technical,nro_document',
            'number_phone' => 'required',
            'contract_start' => 'required',
            'contract_end' => 'required'
        ];
    }

    public function messages(){
        return [
            'firts_name'=>'El nombre es requerido',
            'last_name'=>'El apellido es requerido',
            'email'=>'El email es requerido o neceqsita que ser un email valido y unico',
            'type_document'=>'Es tipo de documentos es requerido',
            'nro_document'=>'El numero de documentos es requerido',
            'number_phone'=>'El numero de tlf es requerido',
            'contract_start'=>'La fecha del contrato inicial es requerido',
            'contract_end'=>'La fecha del contrato finalizado es requerido'
        ];
    }
}
