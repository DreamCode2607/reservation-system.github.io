<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
                return [];
                break;
            case 'POST':
                return [
                    'name'                        =>  'required|max:191',
                    'email'                       =>  'required|email|max:191|unique:users',
                    'password'                    =>  'sometimes|min:6|max:191',
                    'password_confirmation'       =>  'same:password',
                ];
                break;
            case 'PUT':
                return [
                    'name'                        =>  'required|max:191',
                    'email'                       =>  'required|email|max:191',
                    'newPassword'                 =>  'nullable|min:6|max:191',
                    'password_confirmation'       =>  'same:newPassword',
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'name.required'                   => 'El nombre es obligatorio',
            'name.max'                        => 'Max. 191 caracteres',
            'email.required'                  => 'El email es obligatorio',
            'email.email'                     => 'El email no es válido',
            'email.max'                       => 'Max. 191 caracteres',
            'email.unique'                    => 'Este email ya esta registrado',
            'password.required'               => 'La contraseña es obligatorio',
            'password.min'                    => 'Min. 6 caracteres',
            'password.max'                    => 'Max. 191 caracteres',
            'newPassword.min'                 => 'Min. 6 caracteres',
            'newPassword.max'                 => 'Max. 191 caracteres',
            'password_confirmation.same'      => 'Las contraseñas no coinciden',
        ];
    }
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->isMethod('PUT')) {
                $email = User::findOrFail($this->route('id'))->email;
                $newEmail = $this->email;
                if ($email != $newEmail) {
                    $coincidences = User::where('email', $this->email)->count();
                    if ($coincidences > 0) {
                        $validator->errors()->add('email', 'El email ingresado ya está en uso.');
                    }
                }
            }
        });
    }
}
