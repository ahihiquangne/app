<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'decription',
        'image',
        'quantity',
        'price',
        'discount',
        'hot',
        'status',
        'size',
        'category_id',
        'brand_id',
    ];

    public function bill_details()
    {
        return $this->hasMany(Bill_detail::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withDefault();
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function advertises()
    {
        return $this->hasMany(Advertise::class);
    }

    public function scopeFilter($query, QueryFilter $filters)
    {
        return $filters->apply($query);
    }
}
