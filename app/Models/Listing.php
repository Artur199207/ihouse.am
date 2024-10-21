<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = ['availability', 'title']; 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}