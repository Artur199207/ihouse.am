<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categ extends Model
{
    protected $table = 'categs';

    protected $fillable = [
        'name100', 'name101', 'name102', 'name103', 'name104', 
        'name105', 'name106', 'name107', 'name108', 'name109', 
        'name110', 'name111', 'name112', 'name113', 'name114', 
        'name115', 'name116', 'name117', 'name118', 'name119', 
        'name120', 'name121', 'name122', 'name123', 'name124',
        'image001', 'image002', 'description',
    ];

    protected $casts = [
        'image002' => 'array',  // Cast JSON field to an array
    ];
}

