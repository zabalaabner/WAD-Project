<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generic extends Controller
{
    public function about()
    { 
    	return view('about');
    }
}
