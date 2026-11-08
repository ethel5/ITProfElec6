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

    public function update(Request $request) {
        $item = Item::where('id', $request->id)->update([
            'name'=> $request->name,
            'brand'=> $request->brand,
            'price'=> $request->price
        ]);
        return Item::find($request->id);
    }

    public function destroy(Request $request) {
        $item = Item::where('id', $request->id)->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }

    public function all() {
        return Item::all();
    }

    
}
