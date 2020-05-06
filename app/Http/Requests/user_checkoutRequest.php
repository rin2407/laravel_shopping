<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class user_checkoutRequest extends FormRequest
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
            'address' => 'required|min:1|max:255',
            'phone'=> 'required|phone'
        ];
    }
    public function messages(){
        return[
        'phone.phone'=>'The phone number you entered is not valid'
        ];
    }
}
