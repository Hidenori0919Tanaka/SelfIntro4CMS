<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Title;

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
        $titles=DB::table('titles')->first();

        $model = null;

        return view('title', compact('titles','model'));
    }

    public function store(Request $request){
        $model = new Title();
        $model->title = $request->input('title');
        $titles = null;
        return view('title', compact('model','titles'));
    }
}
