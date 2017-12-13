<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('web.index');
    }

    public function search(Request $request)
    {

        return view();
    }
}
