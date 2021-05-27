<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductosCreateRequest extends FormRequest
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
            'nombre_producto'=> 'required|unique:productos',
            'tipo_producto'=> 'required',
            'marca_producto'=> 'required',
            'proveedor_producto'=> 'required',
            'descripcion_producto'=> 'required'
        ]; 
    }
}
