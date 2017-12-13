<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getBSLogin()
    {
        if (Auth::check()) {
            return redirect('bs_admin');
        } else {
            return view('auth.login');
        }
    }

    public function postLogin(Request $request)
    {

    }
}
