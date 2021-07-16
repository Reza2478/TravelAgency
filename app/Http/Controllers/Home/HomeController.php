<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tour=Tour::all();
        $sale=Tour::where('sale', '=', 1)->get();
        return view('index',compact('tour','sale'));
    }
}
