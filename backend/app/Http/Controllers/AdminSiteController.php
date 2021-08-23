<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\About_site;

class AdminSiteController extends Controller
{
    //
    public function index () 
    {
        //db
        $sites=DB::table('about_sites')->first();
        $model= null;
        return view('site', compact('model','sites'));
    }

    public function store(Request $request){
        $model = new About_site();
        $model->title =$request->input('title');
        $sites = null;
        return view('site', compact('model','sites'));
    }
}
