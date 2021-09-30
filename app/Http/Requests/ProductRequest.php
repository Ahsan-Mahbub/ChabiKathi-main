<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name'  => 'required|unique:products,product_name,'.$this->id,
            'slug'  => 'required|unique:products,slug,'.$this->id,
            'product_desc'  => 'required',
            'category_id'  => 'required',
            'price'  => 'required',
            'shop_id' => 'required',
        ];
    }
}
