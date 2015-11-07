<?php
namespace App\Repositories\User;

use App\Models\User;
use Yoelfme\Repository\Repository as BaseRepo;

class UserRepo extends BaseRepo
{
    public function model()
    {
        return User::class;
    }
}
