<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminTitleController extends Controller
{
    //
    public function index () 
    {
        // 現在認証しているユーザーを取得
        $user = Auth::user();

        // 現在認証しているユーザーのIDを取得
        $id = Auth::id();

        //db
        $titles=DB::table('titles')->get();

        return view('title', compact('titles'));
    }
}
