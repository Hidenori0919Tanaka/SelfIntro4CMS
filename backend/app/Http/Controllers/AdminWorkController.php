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
        $works=DB::table('works')>first();

        return view('work', compact('works'));
    }

    public function store(Request $request){
        $model = new Work();
        $model->title =$request->title;
        $model->admin_id =  $id = Auth::id();
        $works=DB::table('works')>first();
        // $user->name = $request->user_name;  // 
        // $article->save();                           // 
        // レコード保存後に、showページへデータを渡してリダイレクト
        return view('work', compact('model','works'));
        return redirect('/admin');
    }
}
