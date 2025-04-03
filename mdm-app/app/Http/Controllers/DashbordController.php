<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Item;


class DashbordController
{


//    public function dashbord()
//    {
//        return view('layouts.dashbord');
//    }



    public function dashbord()
    {
        return view('layouts.dashbord', [
            'categories' => Category::all(),
            'brands' => Brand::all(),
            'items' => Item::with(['category', 'brand'])->get(),
        ]);
    }





}
