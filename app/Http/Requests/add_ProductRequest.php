<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class add_ProductRequest extends FormRequest
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
            'image' => 'required|file',
            'product_name'=>'required|unique:products,product_name|min:1|max:64',
            'producer'=>'required',
            'category'=>'required',
            'unit_price'=>'required|min:1',
            'promo_price'=>'required|min:1',
            'amount'=>'required|integer|min:1'
        ];
    }
}
