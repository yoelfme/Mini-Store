<?php
namespace App\Repositories\Category;

use Yoelfme\Repository\Repository as BaseRepo;
use App\Models\Category;

class CategoryRepo extends BaseRepo
{
    function model()
    {
        return Category::class;
    }

}