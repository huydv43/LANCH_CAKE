<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryCakeRequest extends FormRequest
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
            'category_image' => 'mimes:jpeg,jpg,png|max:10240',
            'category_name' => 'required|min:3|max:1000',
            'category_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'category_image.mimes' => 'bạn cần chọn đúng định dạng ảnh',
            'category_name.required'  => 'Bạn chưa nhập tên',
        ];
    }
}
