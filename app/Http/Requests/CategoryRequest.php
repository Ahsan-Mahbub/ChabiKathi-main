<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        // return [
        //     'category_name',
        //     'category_priority',
        // ];

        return [
            'category_name' => 'required|unique:categories,category_name,'.$this->id,
            'category_priority' => 'required',
        ];

        // $category = $this->route('category');
        // return [
        //     'category_name' => 'required',
        //     'slug'          => 'required|unique:categories,code,' . $category . ',id',
        // ];
    }
}
