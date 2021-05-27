<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteEditRequest extends FormRequest
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
            'nombre_cliente'=> 'required|unique:clientes',
            'telefono_cliente'=> 'numeric|required',
            'correo_cliente'=> 'email|required',
            'rtn_cliente'=> 'numeric|required|unique:clientes',
            'identidad_cliente'=> 'numeric|required|unique:clientes',
            'direccion_cliente'=> 'required',
            'descripcion_cliente'=> 'required'
        ];
    }
}
