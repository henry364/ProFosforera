<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompraCreateRequest extends FormRequest
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
            'proveedor_compra'=> 'required',
            'productos.*'=> 'required',
            'cantidads.*'=>'required',
            'fecha_compra'=> 'required',
            'descripcion_compra'=> 'required'

        ];
    }
}
