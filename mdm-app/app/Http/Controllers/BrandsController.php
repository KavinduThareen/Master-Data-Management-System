<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function brands()
    {
        $brands = Brand::all(); // Retrieve all brands from the database
        return view('layouts.brands', compact('brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:brands,code',
            'name' => 'required',
            'status' => 'required|in:Active,Inactive',
        ]);

        Brand::create([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('brands')->with('success', 'Brand saved successfully!');
    }
}
