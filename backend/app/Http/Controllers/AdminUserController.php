<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    //
    public function index () 
    {
        // 現在認証しているユーザーを取得
        $user = Auth::user();

        // 現在認証しているユーザーのIDを取得
        $id = Auth::id();

        //db
        $users=DB::table('users')->get();

        return view('user', compact('user','id','users'));
    }
}
