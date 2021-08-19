<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    //
    public function index () 
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('admin/index', compact('hello', 'hello_array'));
    }
}

