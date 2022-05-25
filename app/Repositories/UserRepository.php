<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\RepositoryInterface\UserRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }

    public function createUser($data)
    {
        $data['password'] = Hash::make($data["password"]);
        $data['verification_code'] = Str::random(30);
        $user = $this->create($data);
        if ($user != null) {
            return $user;
        }
        return redirect()->back()->with("message", "Đăng ký tài khoản thất bại");
    }

    public function verifyCodeUser($verifyCode)
    {
        $user = $this->model->where("verification_code", $verifyCode)->first();
        if ($user != null) {
            $user->email_verified_at = Carbon::now();
            return $user->save() ? true : false;
        }
        return abort(404);
    }
}

