<?php





namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandsController extends Controller
{
    public function brands()
    {
        $brands = Brand::all();
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

    public function destroy($id)
    {
        // Find the brand by its id and delete it
        $brand = Brand::findOrFail($id);
        $brand->delete();

        // Redirect back with a success message
        return redirect()->route('brands')->with('success', 'Brand deleted successfully!');
    }





    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|unique:brands,code,' . $id,
            'name' => 'required',
            'status' => 'required|in:Active,Inactive',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->update([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('brands')->with('success', 'Brand updated successfully!');
    }






}

