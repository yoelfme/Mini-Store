<?php
namespace App\Repositories\User;

use Yoelfme\Repository\Repository as BaseRepo;
use App\Models\User;

class UserRepo extends BaseRepo
{
    public function model()
    {
        return User::class;
    }
}
