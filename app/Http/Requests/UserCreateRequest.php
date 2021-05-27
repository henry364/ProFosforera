<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name'=> 'required',
            'username' => 'required|unique:users',
            'email'=>'required|unique:users',
            'password'=> 'required|confirmed',
            'password_confirmation'=>'required'

        ];
    }


    public function messages()
    {
        return[
       'name.required' => 'Nombre es requerido',
       'username.required'=> 'Usuario es requerido',
       'username.unique'=> 'Usuario ya esta en uso',
       'email.required'=>'Correo Electronico es requerido',
       'email.unique'=>'Correo Electronico ya esta en uso',
       'password.required'=>'El campo Contraseña es requerido',
       'password_confirmation.required'=> 'El campo Confirmar contraseña requerido',
       'password_confirmation.confirmed'=> 'La contraseña no es igual verifique'

        ];
    }
}
