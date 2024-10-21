<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewCategoryFormRequest extends FormRequest
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
            'name' => 'nullable|string|max:255',
            'name1' => 'nullable|string|max:255',
            'name2' => 'nullable|string|max:255',
            'name3' => 'nullable|string|max:255',
            'name4' => 'nullable|string|max:255',
            'name5' => 'nullable|string|max:255',
            'name6' => 'nullable|string|max:255',
            'name7' => 'nullable|string|max:255',
            'name8' => 'nullable|string|max:255',
            'name9' => 'nullable|string|max:255',
            'name10' => 'nullable|string|max:255',
            'name11' => 'nullable|string|max:255',
            'name12' => 'nullable|string|max:255',
            'name13' => 'nullable|string|max:255',
            'name14' => 'nullable|string|max:255',
            'name15' => 'nullable|string|max:255',
            'name16' => 'nullable|string|max:255',
            'name17' => 'nullable|string|max:255',
            'name18' => 'nullable|string|max:255',
            'name19' => 'nullable|string|max:255',
            'name20' => 'nullable|string|max:255',
            'name21' => 'nullable|string|max:255',
            'name22' => 'nullable|string|max:255',
            'name23' => 'nullable|string|max:255',
            'name24' => 'nullable|string|max:255',
            'name25' => 'nullable|string',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:35000',
            'image1.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:35000',
        ];
        return $rules;
    }
}
