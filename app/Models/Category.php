<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Category extends Model
// {
//     use HasFactory;
//     protected $table = 'categories';

//     protected $fillable = [
//        'name',
//     'slug',
//     'description',
//     'image',
//     'meta_title',
//     'meta_description',
//     'meta_keywords',
//     'navbar_status',
//     'status',
//     'created_by',
//     ];
// }
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name1',
        'name2',
        'name3',
        'name4',
        'name5',
        'name6',
        'name7',
        'name8',
        'name9',
        'name10',
        'name11',
        'name12',
        'name13',
        'name14',
        'name15',
        'name16',
        'name17',
        'name18',
        'name19',
        'name202',
        'name21',
        'name22',
        'name23',
        'name24',
        'slug',
        'slug1',
        'description',
        'image',
        'image1',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'navbar_status',
        'status',
        'created_by',
    ];

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }
}
