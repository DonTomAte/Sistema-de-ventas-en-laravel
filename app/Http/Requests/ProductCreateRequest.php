<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name'=>'required|max:20',
            'price'=> 'required|numeric|min:0',
            'stock'=> 'required|integer|min:0',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'El :attribute es obligatorio',
            'name.max' => 'El :attribute es muy largo',

            'price.required' => 'El :attribute es obligatorio',
            'price.numeric' => 'El :attribute debe ser un numero',
            'price.min' => 'El :attribute debe ser mayor que 0',

            'stock.required' => 'El :attribute es obligatorio',
            'stock.min' => 'El :attribute debe ser minimo 0',
            'stock.integer' => 'El :attribute debe ser un numero entero',
        ];
    }
    public function attributes(){
        return [
            'name' => 'Nombre del Producto',
            'price' => 'Precio',
        ];
    }
}

