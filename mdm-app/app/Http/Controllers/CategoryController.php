<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('layouts.category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:categories,code',
            'name' => 'required',
            'status' => 'required|in:Active,Inactive',
        ]);

        Category::create([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('categories')->with('success', 'Category saved successfully!');
    }


    public function destroy($id)
    {
        // Find the category by its id and delete it
        $category = Category::findOrFail($id);
        $category->delete();

        // Redirect back with a success message
        return redirect()->route('categories')->with('success', 'Category deleted successfully!');
    }


}
