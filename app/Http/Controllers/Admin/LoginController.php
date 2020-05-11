<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function form_login(){
        return view('admin.auth.login');
    }
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], true)) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('fail_login','Đăng nhập thất bại. Email hoặc mật khẩu không đúng');
        }
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
