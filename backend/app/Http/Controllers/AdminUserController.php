<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin_user;

class AdminUserController extends Controller
{
    //
    public function index () 
    {
        try
        {
            // 現在認証しているユーザーを取得
            $user = Auth::user();

            // 現在認証しているユーザーのIDを取得
            $id = Auth::id();

            //db
            $user=DB::table('admin_users')->first();
            return view('user', compact('user'));
        }
        catch( Exception $ex)
        {

        }
        return view('user', compact('user'));
    }

    public function store(Request $request){
        $user = new Admin_user();
        $user->name =$request->name;
        $user->admin_id =  $id = Auth::id();
        // $user->name = $request->user_name;  // 
        // $article->save();                           // 
        // レコード保存後に、showページへデータを渡してリダイレクト
        return view('user', compact('user'));
        return redirect('/admin');
    }
}

