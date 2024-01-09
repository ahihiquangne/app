<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'detail',
        'image',
        'keyword',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
