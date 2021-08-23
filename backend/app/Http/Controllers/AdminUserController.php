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
            $model = null;
            return view('user', compact('user','model'));
        }
        catch( Exception $ex)
        {

        }
        return view('user', compact('user'));
    }

    public function store(Request $request){
        $model = new Admin_user();
        $model->name =$request->input('name');
        $user = null;
        return view('user', compact('user','model'));
    }
}

