<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteCreateRequest extends FormRequest
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
            'nombre_cliente'=> 'required',
            'telefono_cliente'=> 'numeric|required',
            'correo_cliente'=> 'email|required',
            'rtn_cliente'=> 'numeric|required',
            'identidad_cliente'=> 'numeric|required|unique:clientes|size:13',
            'direccion_cliente'=> 'required',
            'descripcion_cliente'=> 'required'
        ];
    }
}
