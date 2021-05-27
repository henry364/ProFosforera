<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcabadosCreateRequest extends FormRequest
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
            'nombre_acabado'=> 'required|unique:acabados',
            'tipo_acabado'=> 'required',
            'descripcion_acabado'=> 'required'
        ];
    }
}
