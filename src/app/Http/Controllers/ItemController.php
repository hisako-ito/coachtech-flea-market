<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Condition;
use App\Models\Category;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('list',compact('items'));
    }

    public function getDetail($item_id)
    {
        $item = Item::with('condition')->find($item_id);

        return view('item', compact('item'));
    }
}
