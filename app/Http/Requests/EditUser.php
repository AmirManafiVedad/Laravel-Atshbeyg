<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUser extends FormRequest
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
            'username' => 'required',
            'email' => 'required|email',
            'roles' => 'required',
            'photo_id' => 'max:10000',
        ];
    }
    public function messages()
    {
        return[
            'firstname.required' => "لطفا نام خود را وارد کنید .",
            'lastname.required' => "لطفا نام خانوادگی خود را وارد کنید .",
            'username.required' => "لطفا نام کاربری خود را وارد کنید .",
            'username.string' => "لطفا نام کاربری خود را با حروف انگلیسی وارد کنید .",
            'email.required' => "لطفا ایمیل خود را وارد کنید .",
            'email.email' => "ایمیل شما معتبر نیست .",
            'roles.required' => "لطفا نقش خود را وارد کنید .",
            'photo_id.max' => "فایل عکس باید از 10 مگابایت کمتر باشد .",
        ];
    }
}
