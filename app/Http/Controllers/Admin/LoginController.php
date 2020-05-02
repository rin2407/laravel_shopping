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
            echo "login thanh cong";
        }else{
            echo "login that bai";
        }
    }
}
