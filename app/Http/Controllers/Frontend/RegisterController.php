<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\RepositoryInterface\UserRepositoryInterface;

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
        dd($user);
    }
}
