<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermisosEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=> 'required',
            'descripcion'=> 'required'
        ];
    }

    public function messages()
    {
        return[
       'name.required' => 'El campo Nombre es requerido',
       'name.unique' => 'Nombre del permiso ya esta siendo usado'

        ];
    }
}
