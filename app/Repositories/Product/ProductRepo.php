<?php
namespace App\Repositories\Product;

use Yoelfme\Repository\Repository as BaseRepo;
use App\Models\Product;

class ProductRepo extends BaseRepo
{
    function model()
    {
        return Product::class;
    }

}