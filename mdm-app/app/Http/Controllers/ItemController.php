<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Brand;
use App\Models\Category;


class ItemController extends Controller

{
    public function items()
    {
        $items = Item::all();
        $brands = Brand::all();
        $categories = Category::all();
        return view('layouts.item', compact('items', 'brands', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code'        => 'required|unique:items,code',
            'name'        => 'required',
            'status'      => 'required|in:Active,Inactive',
            'brand_id'    => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        Item::create([
            'code'        => $request->code,
            'name'        => $request->name,
            'status'      => $request->status,
            'brand_id'    => $request->brand_id,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('items')->with('success', 'Item saved successfully!');
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items')->with('success', 'Item deleted successfully!');
    }
}
