<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdatePassword extends FormRequest
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
        // RÀNG BUỘC DỮ LIỆU TẠO CÁC DIỀU KIỆN.
        return [
            'password_old'  => 'required',
            'password'  => 'required',
            'password_confirm'  => 'required|same:password',
        ];
    }
    public function messages() //Tạo thông báo khi nhập thiếu dữ liệu
    {
        return [
            'password_old.required' => 'Dữ liệu không được để trống',
            'password.required' => 'Dữ liệu không được để trống',
            'password_confirm.required' => 'Dữ liệu không được để trống',
            'password_confirm.same' => 'Mật khẩu xác nhận không đúng',
        ];
    }
}
