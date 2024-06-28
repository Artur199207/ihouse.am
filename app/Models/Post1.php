<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post1 extends Model
{
    use HasFactory;

    protected $table = 'posts_table1';

    protected $fillable = [
        'category_id',
'building',
'condition',
'types',
'taxes',
'living',
'cars',
'bathrooms',
'ceiling',
'old',
'land',
'repair',
'mony',
'change',
'amenities',
'agent',
'communications',
'region',
'appliances',
'desi',
    ];
}
