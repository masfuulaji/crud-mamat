<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        return view('items.index');
    }

    public function create(Request $request){
        $validation = $request->validate([
            'name' => 'required',
        ]);
        return Item::create($request->all());

    }
}
