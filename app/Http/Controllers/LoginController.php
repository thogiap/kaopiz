<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\YearRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function getLogin() {
        return view('login');
    }

    public function postLogin(LoginRequest $request){
        $username = $request->username;
        $password = $request->password;
        if ($username == 'admin' && $password == 'admin'){
//            echo 'dang nhap thanh cong';
            $request->session()->put('logined', true);
//            echo 'dang nhap thanh cong';
            return response('ok');
        }else{
//            echo ' danh nhap that bai';
            $request->session()->put('logined', false);
//            echo ' dang nhap that bai';
            return response('false');
        }
    }

    public function shows()
    {
        return view('year');
    }

    public function isLeapYear(YearRequest $request)
    {
        return 'leap year';
    }
}
