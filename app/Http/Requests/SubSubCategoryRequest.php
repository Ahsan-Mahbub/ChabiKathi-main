<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubSubCategoryRequest extends FormRequest
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
            'sub_sub_category_name' => 'required|unique:sub_sub_categories,sub_sub_category_name,'.$this->id,
            'slug' => 'required|unique:sub_sub_categories,slug,'.$this->id,
        ];
    }
}
