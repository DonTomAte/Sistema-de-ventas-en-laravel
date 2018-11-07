<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OperationProductRequest extends FormRequest
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

            'quantity'=> 'required|integer|min:0',
            'unit_price'=> 'required|numeric|min:0'
        ];
    }
    public function messages(){
        return [
            'quantity.required'=> 'El campo :attribute es obligatorio',
            'quantity.integer'=> 'El campo :attribute debe ser un numero entero',
            'quantity.min'=> 'El campo :attribute debe ser minimo 0',
            'unit_price.required'=> 'El campo :attribute es obligatorio',
            'unit_price.numeric'=> 'El campo :attribute debe ser un numero',
            'unit_price.min'=> 'El campo :attribute debe ser minimo 0'
        ];
    }
    public function attributes(){
        return [
            'quantity' => 'Cantidad',
            'unit_price' => 'Precio unitario'
        ];
    }
}
