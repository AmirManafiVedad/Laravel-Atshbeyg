<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategories extends FormRequest
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
            'title' => 'required|min:4|max:18|unique:categories',
            'slug' => 'unique:categories',
            'meta_description' => 'required',
            'meta_key_words' => 'required',
            'photo_id' => 'required|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "لطفا عنوان دسته بندی را وارد کنید .",
            'title.min' => "عنوان دسته بندی نباید کمتر از 4 کلمه باشد .",
            'title.max' => "عنوان دسته بندی نباید بیشتر از 18 کلمه باشد .",
            'title.unique' => 'این نام قبلا انتخاب شده است',
            'slug.unique' => 'این نام مستعار قبلا انتخاب شده است',
            'meta_description.required' => "لطفا توضیحات دسته بندی را وارد کنید .",
            'meta_key_words.required' => "لطفا تگ های دسته بندی را وارد کنید .",
            'photo_id.required' => "لطفا عکس مطلب را وارد کنید .",
            'photo_id.max' => "فایل عکس باید از 10 مگابایت کمتر باشد .",
        ];
    }
}
