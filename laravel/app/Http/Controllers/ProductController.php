<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category)
    {
        return view('web.product.index');
    }

    public function add()
    {
        return view('admin.product.add');
    }
}
