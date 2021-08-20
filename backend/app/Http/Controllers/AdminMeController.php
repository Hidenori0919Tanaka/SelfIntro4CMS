<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminMeController extends Controller
{
    //
    public function index () 
    {
        //db
        $mes=DB::table('about_mes')->get();

        return view('me', compact('mes'));
    }
}
