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

    public function getDetail(Item $item)
    {
        $items = Item::all();
        $categories = Category::all();

        return view('item', compact('item','items','categories'));
    }
}
