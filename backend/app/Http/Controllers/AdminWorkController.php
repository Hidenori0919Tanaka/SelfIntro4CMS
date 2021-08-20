<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminWorkController extends Controller
{
    //
    public function index () 
    {
        //db
        $works=DB::table('works')->get();

        return view('work', compact('works'));
    }
}
