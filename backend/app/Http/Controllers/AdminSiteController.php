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
        $sites=DB::table('about_sites')>first();

        return view('site', compact('sites'));
    }

    public function store(Request $request){
        $model = new About_site();
        $model->title =$request->title;
        $model->admin_id =  $id = Auth::id();
        $sites=DB::table('about_sites')>first();
        // $user->name = $request->user_name;  // 
        // $article->save();                           // 
        // レコード保存後に、showページへデータを渡してリダイレクト
        return view('site', compact('model','sites'));
        return redirect('/admin');
    }
}
