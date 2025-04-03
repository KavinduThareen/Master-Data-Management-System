<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController
{
    public function dashbord()
    {
        return view('layouts.dashbord');
    }
}
