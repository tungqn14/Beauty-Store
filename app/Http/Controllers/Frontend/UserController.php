<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function profile()
    {
        return view("site.user.profile");
    }
}
