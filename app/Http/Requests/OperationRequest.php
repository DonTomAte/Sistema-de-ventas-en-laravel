<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'type'=>'required|min:3'
        ];
    }
    public function messages(){
        return [
            'name.required'=> 'El campo :attribute es obligatorio. Algo raro, consulte con el administrador si tiene problemas'
        ];
    }
    public function attributes(){
        return [
            'name' => 'Nombre del Proveedor'
        ];
    }
}
