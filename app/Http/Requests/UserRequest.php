<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
          'name' => 'required|max:50',
          'email' => 'required|email',
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'กรุณาพิมพ์ชื่้อผู้ใช้',
        'name.max' => 'ชื่อผู้ใช้ต้องไม่เกิน50ตัวอักษร',
          'email.required'  => 'กรุณาพิมพ์อีเมล์',
          'email.email'  => 'กรุณาพิมพ์อีเมล์ให้ถูกต้อง',
      ];
    }
}
