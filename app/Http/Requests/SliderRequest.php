<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'slider_image' => 'required|mimes:jpeg,jpg,png|max:10240',
            'slider_title' => 'required|min:3|max:50',
            'slider_namebtn' => 'required|min:3|max:15',
            'slider_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'slider_image.required' => 'Bạn chưa chọn ảnh',
            'slider_image.min' => 'title cần nhập tối thiểu 3 kí tự',
            'slider_image.max' => 'Title tối đa 50 kí tự',
            'slider_name.required'  => 'Bạn chưa nhập title',
            'slider_status.required'  => 'bạn cần chọn trạng thái',
            'slider_image.max'  => 'kích thước ảnh quá lớn',
        ];
    }
}
