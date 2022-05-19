<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\RepositoryInterface\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }

    public function createUser($data)
    {
        $data['password'] = Hash::make($data["password"]);
        if($this->create($data)) {
            return true;
        }
        return false;
    }
}
