<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class AdminContactController extends Controller
{
    //
    public function index () 
    {
        //db
        $contacts=DB::table('contacts')->first();

        // $model = null;
        $title = null;

        return view('contact', compact('contacts', 'title'));
    }

    public function store(Request $request){
        $title = $request->input('title');
        debug($title);
        return view('contact', compact('title'));
    }
}
