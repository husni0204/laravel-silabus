<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required', 'unique:users', 'alpha_num', 'min:4', 'max:25'],
            'name' => ['required', 'string', 'min:5'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:6'],
        ];
    }
}
