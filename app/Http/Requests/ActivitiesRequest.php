<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitiesRequest extends FormRequest
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
                'title' => 'required',
                'content' => 'required',
                'image' => 'mimes:jpeg,jpg,png',
            ];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณากรอกชื่อบุคลากร',
            'position_id.required' => 'กรุณาเลือกตำแหน่ง',
            'image.mimes' => 'กรุณาเลือกไฟล์ภาพนามสกุล jpeg,jpg,png',
        ];
    }
}
