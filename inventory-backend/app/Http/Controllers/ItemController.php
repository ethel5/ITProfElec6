<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Request $request)
    {
        $item = Item::create([
            'name'=> $request->name,
            'brand'=> $request->brand,
            'price'=> $request->price
        ]);
        return response()->json($item, 201);
    }

    
}
