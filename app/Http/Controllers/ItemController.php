<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){

        $items = Item::all()->where(function ($item) {
            return $item->school_id === 101;
        });

        // dump and die (zur Fehlersuche)
        // dd($items);

    return view('item.index', ['items' => $items]);
    }


}
