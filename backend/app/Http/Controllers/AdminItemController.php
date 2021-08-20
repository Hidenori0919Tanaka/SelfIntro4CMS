<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminItemController extends Controller
{
    //
    public function index () 
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        return view('item');
    }
}
