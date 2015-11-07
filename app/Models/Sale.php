<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    
    protected $table = 'sales';

    protected $fillable = [
        'name',
        'last_name',
        'nit',
        'email',
        'address',
        'phone',
        'subtotal',
        'iva',
        'total'
    ];

    public function details()
    {
        return $this->hasMany('App\SaleDetail', 'sale_id', 'id')->with('product');
    }
}