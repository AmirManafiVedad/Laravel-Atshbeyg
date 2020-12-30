<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePost extends FormRequest
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
            'title' => 'required|min:4|max:25',
            'description' => 'required|min:10|max:300',
            'slug' => 'unique:posts',
            'meta_description' => 'required',
            'meta_kay_words' => 'required',
            'photo_id' => 'required|max:10000',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => "لطفا عنوان مطلب را وارد کنید .",
            'title.min' => "عنوان مطلب نباید کمتر از 4 کلمه باشد .",
            'title.max' => "عنوان مطلب نباید بیشتر از 25 کلمه باشد .",
            'description.required' => "لطفا توضیحات مطلب را وارد کنید .",
            'description.min' => "توضیحات مطلب نباید کمتر از 10 کلمه باشد .",
            'description.max' => "توضیحات مطلب نباید بیشتر از 300 کلمه باشد .",
            'slug.unique' => 'این نام مستعار قبلا انتخاب شده است',
            'meta_description.required' => "لطفا ایمیل خود را وارد کنید .",
            'meta_kay_words.required' => "لطفا تگ های مطلب را وارد کنید .",
            'photo_id.required' => "لطفا عکس مطلب را وارد کنید .",
            'photo_id.max' => "فایل عکس باید از 10 مگابایت کمتر باشد .",
        ];
    }
}
