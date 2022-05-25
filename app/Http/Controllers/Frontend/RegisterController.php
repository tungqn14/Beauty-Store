<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\VerifyEmail;
use App\RepositoryInterface\UserRepositoryInterface;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function register()
    {
        return view("site.register");
    }

    public function handleRegister(RegisterRequest $request)
    {
        $user = $this->repository->createUser($request->validated());
        if ($user) {
            Mail::to($user->email)->send(new VerifyEmail($user));
            return redirect()->back()->with(session()->flash("message", "Tài khoản của bạn đã được tạo thành công, Vui lòng xác thực email !!!"));
        }
        return redirect()->back()->with(session()->flash("failMessage", "Đã xảy ra lỗi tạo tài khoản!!!"));
    }

    public function verifyEmail(Request $request)
    {
        if ($this->repository->verifyCodeUser($request->input("hashCode"))) {
            return redirect()->route("site.login")->with(session()->flash("message", "Xác thực tài khoản thành công. Vui lòng đăng nhập"));
        }
        return redirect()->route("site.register")->with(session()->flash("failMessage", "Đã có lỗi xác thực. Vui lòng đăng ký lại tài khoản khác"));
    }
}
