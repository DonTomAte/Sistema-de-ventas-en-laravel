<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:20',
            'description' => 'required|max:50',
            'type' => 'required|max:20'
        ];
    }
    public function messages(){
        return [
            'name.required' =>'El :attribute es obligatorio',
            'name.max' => 'El :attribute debe ser mas corto',
            'description.required' =>'El :attribute es obligatorio',
            'description.max' => 'El :attribute debe ser mas corto',
            'type.required' =>'El :attribute es obligatorio',
            'type.max' => 'El :attribute debe ser mas corto'
        ];
    }
    public function attributes(){
        return [
            'name'=>'nombre de categoria'
        ];
    }
}
