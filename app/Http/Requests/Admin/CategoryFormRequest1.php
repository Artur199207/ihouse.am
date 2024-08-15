<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest1 extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name100' => 'nullable|string|max:200',
            'name101' => 'nullable|string|max:200',
            'name102' => 'nullable|string|max:200',
            'name103' => 'nullable|string|max:200',
            'name104' => 'nullable|string|max:200',
            'name105' => 'nullable|string|max:200',
            'name106' => 'nullable|string|max:200',
            'name107' => 'nullable|string|max:200',
            'name108' => 'nullable|string|max:200',
            'name109' => 'nullable|string|max:200',
            'name110' => 'nullable|string|max:200',
            'name111' => 'nullable|string|max:200',
            'name112' => 'nullable|string|max:200',
            'name113' => 'nullable|string|max:200',
            'name114' => 'nullable|string|max:200',
            'name115' => 'nullable|string|max:200',
            'name116' => 'nullable|string|max:200',
            'name117' => 'nullable|string|max:200',
            'name118' => 'nullable|string|max:200',
            'name119' => 'nullable|string|max:200',
            'name120' => 'nullable|string|max:200',
            'name121' => 'nullable|string|max:200',
            'name122' => 'nullable|string|max:200',
            'name123' => 'nullable|string|max:200',
            'name124' => 'nullable|string|max:200',
            'description' => 'nullable|string',
            'image001' => 'nullable|mimes:jpeg,jpg,png|max:35000',
            'image002.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:35000',
        ];
    }
}

