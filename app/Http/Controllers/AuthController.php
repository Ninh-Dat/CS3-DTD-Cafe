<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public $userService;
    public $roleRepository;

    public function __construct(UserService $userService, RoleRepository $roleRepository)
    {
        $this->userService=$userService;
        $this->roleRepository = $roleRepository;
    }

    public function showFormLogin()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request){
        if ($this->userService->login($request)){
            return redirect()->route('products.index');

        } else {
            Session::flash('msg', 'Tài khoản hoặc mật khẩu không đúng');
            return redirect()->back();
        }

    }

    public function showFormRegister()
    {
        $roles = $this->roleRepository->getAll();
        return view('backend.auth.register', compact('roles'));
    }

    public function register(Request $request)
    {

         $this->userService->create($request);
        return redirect()->route('showFormLogin');
    }
}
