<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required',
            'phone'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dữ liệu không được để trống',
            'email.required' => 'Dữ liệu không được để trống',
            'password.required' => 'Dữ liệu không được để trống',
            'phone.required' => 'Dữ liệu không được để trống'
        ];
    }
}
