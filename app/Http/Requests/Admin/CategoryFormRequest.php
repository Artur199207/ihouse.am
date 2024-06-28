<?php

// namespace App\Http\Requests\Admin;

// use Illuminate\Foundation\Http\FormRequest;

// class CategoryFormRequest extends FormRequest
// {
//     public function authorize()
//     {
//         return true;
//     }

//     public function rules()
//     {
//         $rules = [
//             'name' => [
                
//                 'string',
//                 'max:200'
//             ],
//             'name2'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name3'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name4'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name5'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name5'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name7'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name8'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name9'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name10'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name11'=>[
//                'string',
//                 'max:200' 
//             ],
//             'name12'=>[
//                'string',
//                 'max:200' 
//             ],
//             'slug1'=>[
//                 'string',
//                 'max:200'
//             ],
//             'slug' => [
                
//                 'string',
//                 'max:200'
//             ],
//             'description' => [
//                 'required',
//             ],
//             'image' => [
//                 'nullable',
//                 'mimes:jpeg,jpg,png'
//             ],
//             'meta_title' => [
                
//                 'string',
//                 'max:200'
//             ],
//             'meta_description' => [
               
//                 'string',
//             ],
//             'meta_keywords' => [
                
//                 'string',
//             ],
//             'navbar_status' => [
                
//                 'nullable',
//             ],
//             'status' => [
               
//                 'nullable',
//             ],
//         ];

//         return $rules; 
//     }
// }
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
          'name' => ['nullable', 'string', 'max:200'],
            'name1' => ['nullable', 'string', 'max:200'],
            'name2' => ['nullable', 'string', 'max:200'],
            'name3' => ['nullable', 'integer'],
            'name4' => ['nullable', 'integer'],
            'name5' => ['nullable', 'string', 'max:200'],
            'name6' => ['nullable', 'integer'],
            'name7' => ['nullable', 'integer'],
            'name8' => ['nullable', 'string', 'max:200'],
            'name9' => ['nullable', 'string', 'max:200'],
            'name10' => ['nullable', 'string', 'max:200'],
            'name11' => ['nullable', 'string', 'max:200'],
            'name12' => ['nullable', 'string', 'max:200'],
            'slug' => ['nullable', 'string', 'max:200'],
            'slug1' => ['nullable', 'string', 'max:200'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png'],
            'meta_title' => ['nullable', 'string', 'max:200'],
            'meta_description' => ['nullable', 'string'],
            'meta_keywords' => ['nullable', 'string'],
            'des' => ['nullable', 'string'],
            'navbar_status' => ['nullable'],
            'status' => ['nullable'],
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif|max:35000',
        ];

        return $rules;
    }
}
