<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class add_postRequest extends FormRequest
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
            'post_name'=>'required|unique:posts,post_title',
            'post_detail'=>'required',
            'image'=>'required|file|image'
        ];
    }
}
