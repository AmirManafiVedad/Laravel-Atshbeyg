<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users|string',
            'email' => 'required|email|unique:users',
            'roles' => 'required',
            'photo_id' => 'required|max:10000',
            'password' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return[
            'firstname.required' => "لطفا نام خود را وارد کنید .",
            'lastname.required' => "لطفا نام خانوادگی خود را وارد کنید .",
            'username.required' => "لطفا نام کاربری خود را وارد کنید .",
            'username.string' => "لطفا نام کاربری خود را با حروف انگلیسی وارد کنید .",
            'username.unique' => "نام کاربری وارد شده قبلا ذخیره شده است ، لطفا نام کاربری دیگری وارد کنید .",
            'email.required' => "لطفا ایمیل خود را وارد کنید .",
            'email.unique' => "ایمیل وارد شده قبلا ذخیره شده است ، لطفا ایمیل دیگری وارد کنید .",
            'email.email' => "ایمیل شما معتبر نیست .",
            'roles.required' => "لطفا نقش خود را وارد کنید .",
            'photo_id.required' => "لطفا عکس پروفایل خود را وارد کنید .",
            'photo_id.max' => "فایل عکس باید از 10 مگابایت کمتر باشد .",
            'password.required' => "لطفا رمز کاربری خود را وارد کنید .",
            'password.min' => "رمز وارد شده نباید کمتر از 8 کاراکتر باشد .",
        ];
    }

}
