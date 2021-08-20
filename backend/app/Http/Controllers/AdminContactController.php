<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContactController extends Controller
{
    //
    public function index () 
    {
        //db
        $contacts=DB::table('contacts')->get();

        return view('contact', compact('contacts'));
    }
}
