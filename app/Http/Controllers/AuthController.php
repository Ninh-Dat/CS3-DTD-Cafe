<?php

namespace App\Http\Controllers;

use App\Models\Role;
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
            Session::flash('msg', 'Tài khoản hoặc mật khẩu không đúng');
            return redirect()->back();
        }

    }

    public function showFormRegister()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));
    }

    public function register(Request $request)
    {

         $this->userService->create($request);
        return redirect()->route('showFormLogin');
    }
}
