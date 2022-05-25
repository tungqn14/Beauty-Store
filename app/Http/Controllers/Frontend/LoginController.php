<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\RepositoryInterface\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function login()
    {
        return view("site.login");
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleLoginGoogle(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $is_user = $this->repository->findCondition("email", $googleUser->getEmail())->first();
            if ($is_user != null) {
                Auth::login($is_user);
                return redirect()->route("site.home");
            }
            $data = [
                'fullname' => $googleUser->getName(),
                'email' =>  $googleUser->getEmail(),
                'password' => Hash::make( $googleUser->getName()."@".$googleUser->getId()),
                'nickname' => "User".$googleUser->getId(),
                'google_id' => $googleUser->getId(),
            ];
            $user = $this->repository->createUser($data);
            if ($user != null) {
                Auth::login($user);
                return redirect()->route("site.user.profile");
            }
            return redirect()->back()->with(session()->flash("failMessage", "Đã xảy ra đăng nhập tài khoản!!!"));
        } catch(\Exception $e) {
           abort(404);
           dd($e->getMessage());
        }
    }
    public function handleLoginFacebook()
    {
        return view("site.login");
    }

    public function handleLogin(LoginRequest $request)
    {
        if (Auth::attempt($request->only("email", "password"), $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
