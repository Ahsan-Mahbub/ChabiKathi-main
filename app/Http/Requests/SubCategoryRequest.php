<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'sub_category_name'  => 'required|unique:sub_categories,sub_category_name,'.$this->id,
            'category_id' => 'required',
            'slug'      => 'required|unique:sub_categories,slug,'.$this->id,
        ];
    }
}
