<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
    }

    public function getBSLogin()
    {
        if (Auth::check()) {
            return view('auth.login');
        } else {
            return redirect()->route('/bs_admin');
        }
    }
}
