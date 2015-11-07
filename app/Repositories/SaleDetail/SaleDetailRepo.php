<?php
namespace App\Repositories\SaleDetail;

use Yoelfme\Repository\Repository as BaseRepo;
use App\Models\SaleDetail;

class SaleDetailRepo extends BaseRepo
{
    function model()
    {
        return SaleDetail::class;
    }

}