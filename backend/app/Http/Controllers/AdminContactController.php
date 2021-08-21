<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class AdminContactController extends Controller
{
    //
    public function index () 
    {
        //db
        $contacts=DB::table('contacts')->first();

        // $model = null;
        $title = 0;

        return view('contact', compact('contacts', 'title'));
    }

    public function store(Request $request){
        // $model = new Contact();
        $title = $request->title;
        // $model->admin_id = Auth::id();
        $contacts=DB::table('contacts')->first();
        // $user->name = $request->user_name;  // 
        // $article->save();                           // 
        // レコード保存後に、showページへデータを渡してリダイレクト
        return view('contact', compact('title','contacts'));
        return redirect('/admin');
    }
}
