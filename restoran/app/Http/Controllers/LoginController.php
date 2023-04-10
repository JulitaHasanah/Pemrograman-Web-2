<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
       return view('login.login', [
           'title' => 'Login',
           'active' => 'login'
       ]);
    }

    public function loginproses(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return view('/menu.menu');
        }
    return redirect('login');
    }
}
