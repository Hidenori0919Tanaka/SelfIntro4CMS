<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminItemController extends Controller
{
    //
    public function index () 
    {
        //db
        $items=DB::table('items')->get();

        return view('item', compact('items'));
    }
}
