<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovimientoCreateRequest extends FormRequest
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
            'fecha_movimiento'=> 'required',
            'descripcion_movimiento'=> 'required',
            'acabado_movimiento'=>'required',
            'productos'=>'required',
            'cantidads'=>'required'
        ];
    }
}
