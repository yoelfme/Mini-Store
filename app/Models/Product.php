<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'cost',
        'price'
    ];

    public function category()
    {
        return $this->hasOne('App\Category', 'id', 'category_id');
    }

}