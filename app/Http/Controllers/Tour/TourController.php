<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tour=Tour::all();
        $airplane=Tour::where('type', '=', 'airplane')->get();
        $earth=Tour::where('type', '!=', 'airplane')->get();
        $lastmoment=Tour::where('lastmoment', '=', 1)->get();
        return view('tour',compact('tour','airplane','earth','lastmoment'));
    }
}
