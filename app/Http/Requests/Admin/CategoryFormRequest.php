<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => [
                'required',
                'string',
                'max:200'
            ],
            'slug' => [
                'required',
                'string',
                'max:200'
            ],
            'description' => [
                'required',
            ],
            'image' => [
                'nullable',
                'mimes:jpeg,jpg,png'
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
                
                'nullable',
            ],
            'status' => [
               
                'nullable',
            ],
        ];

        return $rules; // <-- Added semicolon here
    }
}
