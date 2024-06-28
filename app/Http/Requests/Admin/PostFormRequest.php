<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
        $rules= [
            'building' => 'string|max:255',
            'condition' => 'string|max:255',
            'types' => 'string|max:255',
            'taxes' => 'integer',
            'living' => 'integer',
            'cars' => 'integer',
            'bathrooms' => 'integer',
            'ceiling' => 'numeric',
            'old' => 'numeric',
            'land' => 'numeric',
            'repair' => 'string|max:255',
            'mony' => 'numeric',
            'change' => 'string|max:255',
            'amenities' => 'string|max:255',
            'communications' => 'string|max:255',
            'region' => 'string|max:255',
            'appliances' => 'string|max:255',
            'agent' => 'rstring|max:255',
            'desi' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:35000',
            'image2' => 'image|mimes:jpeg,png,jpg,gif|max:35000'
        ];


        return $rules;
    }
}
