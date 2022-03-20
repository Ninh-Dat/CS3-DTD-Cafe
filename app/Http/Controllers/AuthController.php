<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Repositories\RoleRepository;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


        $valition = $request->validate([
            'email'=>'required',
            'password'=>'required',
            ],

            [
                "email.required"=>"Điền thông tin email",
                "password.required"=>"Điền mật khẩu",

            ]
        );

        if ($this->userService->login($request,$valition)){
            toastr()->success('Đăng nhập thành công');
            return redirect()->route('products.index');

        } else {
            Session::flash('msg', 'Tài khoản  không đúng');
            toastr()->info('Đăng nhập không thành công');
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

        $valition = $request->validate([
            'name'=>'required',
            'role_id'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirmPassword'=>'required',
            'address'=>'required',
            'phone'=>'required',
        ],
            [
                "name.required"=>"Không được để trống",
                "role_id.required"=>"Không được để trống",
                "email.required"=>"Điền thông tin email",
                "password.required"=>"Điền mật khẩu",
                "confirmPassword.required"=>"Nhập lại mật khẩu",
                "address.required"=>"Điền thông tin địa chỉ",
                "phone.required"=>"Điền  số điện thoại",
            ]
        );

         $this->userService->create($request,$valition);
        toastr()->success('Đăng ký thành công');
        return redirect()->route('showFormLogin');
    }

    public function logout(){
        //logout
        Auth::logout();
        return redirect()->route('showFormLogin');
    }
}
