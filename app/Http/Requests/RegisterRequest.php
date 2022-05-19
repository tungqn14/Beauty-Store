<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "fullname" => "required",
            "nickname" => "required",
            "email" => "required|unique:users,email",
            "phone" => "required|numeric",
            "password" => "required|min:6",
            "address" => "required",
        ];
    }
}
