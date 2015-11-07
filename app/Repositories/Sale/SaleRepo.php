<?php
namespace App\Repositories\Sale;

use Yoelfme\Repository\Repository as BaseRepo;
use App\Models\Sale;

class SaleRepo extends BaseRepo
{
    function model()
    {
        return Sale::class;
    }

}