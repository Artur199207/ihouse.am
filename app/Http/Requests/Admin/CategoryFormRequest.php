<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
        $rules = [
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'Slug' => [
                'required',
                'string',
                'max:200'
            ],
            'Description' => [
                'required',
            ],
            'image' => [
                'required',
                'mimes:jpeg,jpg,png,JPG',
                
            ],
            'meta_title' => [
                'required',
                'string',
                'max:200'
                
            ],
            'meta_description' => [
                'required',
                'string',
                
            ],
            'meta_keywords' => [
                'required',
                'string',
                
            ],
            'navbar_status' => [
                'nullabe',
                'boolean',
                
            ],
            'status' => [
                'nullabe',
                'boolean',
                
            ],
        ];
        return $rules;
    }
}
