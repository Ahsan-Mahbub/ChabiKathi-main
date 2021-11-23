<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrandChildCategoryRequest extends FormRequest
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
            'grand_child_category_name' => 'required|unique:grand_child_categories,grand_child_category_name,'.$this->id,
            'slug' => 'required|unique:grand_child_categories,slug,'.$this->id,
        ];
    }
}
