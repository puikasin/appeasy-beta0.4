<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function unit()
    {
        return $this->hasMany(UnitProduct::class);
    }

    public function categoryProduct()
    {
        return $this->belongsTo(CategoryProduct::class);
    }
}
