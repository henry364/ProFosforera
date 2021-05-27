<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedoresCreateRequest extends FormRequest
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
            'nombre_proveedor'=> 'required',
            'telefono_proveedor'=> 'numeric|required|unique:proveedors',
            'correo_proveedor'=> 'email|required',
            'rtn_proveedor'=> 'numeric|required|unique:proveedors',
            'identidad_proveedor'=> 'numeric|required|unique:proveedors',
            'direccion_proveedor'=> 'required',
            'descripcion_proveedor'=> 'required'
        ];
    }
}
