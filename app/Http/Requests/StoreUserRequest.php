<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'     => ['required', 'string'],
            'username' => ['required', 'string', 'unique:users,username'],
            'email'    => ['required', 'email', 'unique:users,email'],
            'team_id'  => ['required', 'integer'],
            'password' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'     => 'O nome é obrigatório.',
            'username.required' => 'O nome de usuário é obrigatório.',
            'username.unique'   => 'Este nome de usuário já está em uso.',
            'email.required'    => 'O e-mail é obrigatório.',
            'email.email'       => 'Informe um endereço de e-mail válido.',
            'email.unique'      => 'Este e-mail já foi cadastrado.',
            'team_id.required'  => 'Selecione uma equipe.',
            'team_id.integer'   => 'O identificador da equipe é inválido.',
            'password.required' => 'A senha é obrigatória.',
        ];
    }
}
