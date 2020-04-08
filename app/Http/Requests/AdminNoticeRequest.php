<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminNoticeRequest extends FormRequest
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
            'notice_title'=>'bail|required|min:6',
            'notice_description'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'notice_title.required' => ':attribute is required',
            'notice_description.required' => ':attribute I need this value',
        ];
    }

    public function attributes()
    {
        return [
            'notice_title' => 'Nice name',
            'notice_description' => 'Like name',

        ];
    }
}
