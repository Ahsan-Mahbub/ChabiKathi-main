<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreviousProductRequest extends FormRequest
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
            'product_name'  => 'required',
                'product_slug'  => 'required',
                'product_desc'  => 'required',
                'category_id'  => 'required',
                'price'  => 'required',
                'shop_id' => 'required',
                'seller_id' => 'required',
        ];
    }
}
