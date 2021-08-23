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
        $items=DB::table('items')->first();
        $item = null;
        return view('item', compact('items','item'));
    }

    public function store(Request $request){
        $items = null;
        $model = new Item();
        $model->item1 =$request->input('item1');
        $item = $model->item1;
        return view('item', compact('item','items'));
    }
}
