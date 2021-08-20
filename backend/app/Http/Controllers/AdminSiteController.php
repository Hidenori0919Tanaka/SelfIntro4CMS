<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSiteController extends Controller
{
    //
    public function index () 
    {
        //db
        $sites=DB::table('about_sites')->get();

        return view('site', compact('sites'));
    }
}
