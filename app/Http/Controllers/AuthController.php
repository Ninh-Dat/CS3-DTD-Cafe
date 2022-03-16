<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService=$userService;
    }

    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        if ($this->userService->login($request)){
//            return redirect()->route('products.index');
            return view('welcome');
        } else {
            Session::flash('msg', 'Tài khoản, mật khẩu không đúng');
            return redirect()->back();
        }
    }
}
