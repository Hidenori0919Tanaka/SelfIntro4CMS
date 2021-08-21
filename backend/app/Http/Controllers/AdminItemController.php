<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;


class AdminItemController extends Controller
{
    //
    public function index () 
    {
        //db
        $items=DB::table('items')>first();

        return view('item', compact('items'));
    }

    public function store(Request $request){
        $model = new Item();
        $model->item1 =$request->item1;
        $model->admin_id =  $id = Auth::id();
        // $user->name = $request->user_name;  // 
        // $article->save();                           // 
        // レコード保存後に、showページへデータを渡してリダイレクト
        $items=DB::table('items')>first();
        return view('item', compact('model','items'));
        return redirect('/admin');
    }
}
