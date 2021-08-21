<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class AdminMeController extends Controller
{
    //
    public function index () 
    {
        //db
        $mes=DB::table('about_mes')>first();

        return view('me', compact('mes'));
    }

    public function store(Request $request){
        $model = new Admin_user();
        $model->title =$request->title;
        $model->admin_id =  $id = Auth::id();
        // $user->name = $request->user_name;  // 
        // $article->save();                           // 
        // レコード保存後に、showページへデータを渡してリダイレクト
        $mes=DB::table('about_mes')>first();
        return view('me', compact('model','mes'));
        return redirect('/admin');
    }
}
