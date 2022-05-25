<?php
namespace App\RepositoryInterface;

use App\RepositoryInterface\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function createUser($data);
    public function verifyCodeUser($verifyCode);
}
