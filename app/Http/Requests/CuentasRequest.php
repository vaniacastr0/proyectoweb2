<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CuentasRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'User' => 'required|min:10|max:20|unique:cuentas',
            'Password' => 'bail|required|min:4|max:20|same:password2',
            'Nombre' => 'required|min:10|max:20',
            'Apellido' => 'required|min:10|max:20',
            'Perfil_Id' => 'bail|required|integer|gte:1|exists:perfiles,Id',
        ];
    }

    public function messages():array
    {
        return [
            'User.required' => 'Indique nombre del usuario',
            'User.min' => 'El nombre de usuario debe tener entre 10 y 20 caracteres',
            'User.max' => 'El nombre de usuario debe tener entre 10 y 20 caracteres',
            'User.unique' => 'El user indicado ya está asignado',
            'Password.required' => 'Indique contraseña del usuario',
            'Password.min' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'Password.max' => 'La contraseña debe tener entre 6 y 20 caracteres',
            'Nombre.required' => 'Indique el nombre del usuario',
            'Nombre.min' => 'El nombre debe tener entre 10 y 20 caracteres',
            'Nombre.max' => 'El nombre debe tener entre 10 y 20 caracteres',
            'Apellido.required' => 'Indique el apellido del usuario',
            'Apellido.min' => 'El apellido debe tener entre 10 y 20 caracteres',
            'Apellido.max' => 'El apellido debe tener entre 10 y 20 caracteres',
            'Perfil_Id.required' => 'Indique perfil del usuario',
            'Perfil_Id.integer' => 'Perfil no válido',
            'Perfil_Id.exists' => 'Perfil no válido',
        ];
    }
}
