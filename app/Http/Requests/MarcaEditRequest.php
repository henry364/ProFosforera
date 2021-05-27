<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcaEditRequest extends FormRequest
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

        $marca = $this->route('/marca');
        return [
         //'nombre_marca'=> ['required','unique:marcas,nombre_marca,' . request()->route('marca')->id] ,
          // 'nombre_marca' => ['required', 'unique:marcas,nombre_marca,' . $marca->id],
           'descripcion_marca' => 'required',
           'nombre_marca' => 'required'
        ];
    }
}
