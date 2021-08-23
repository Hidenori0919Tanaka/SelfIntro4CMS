<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\about_me;
use Illuminate\Support\Facades\Auth;

class AdminMeController extends Controller
{
    //
    public function index () 
    {
        //db
        $mes=DB::table('about_mes')->first();
        $model = null;
        return view('me', compact('model','mes'));
    }

    public function store(Request $request){
        $model = new about_me();
        $model->title =$request->input('title');
        $mes = null;
        return view('me', compact('model','mes'));
    }
}
