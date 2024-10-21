<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    use HasFactory;
    protected $table = 'newcategory';

    protected $fillable = [
        'name', 'name1', 'name2', 'name3', 'name4', 
        'name5', 'name6', 'name7', 'name8', 'name9', 
        'name10', 'name11', 'name12', 'name13', 'name14', 
        'name15', 'name16', 'name17', 'name18', 'name19', 
        'name20', 'name21', 'name22', 'name23', 'name24',
        'image', 'image1', 'name25',
    ];
}
