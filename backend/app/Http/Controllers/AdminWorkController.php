<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Work;


class AdminWorkController extends Controller
{
    //
    public function index () 
    {
        //db
        $works=DB::table('works')->first();
        $model = null;
        return view('work', compact('works','model'));
    }

    public function store(Request $request){
        $model = new Work();
        $model->title =$request->input('title');
        $works = null;
        return view('work', compact('model','works'));
    }
}
