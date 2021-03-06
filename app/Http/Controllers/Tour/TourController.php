<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tour=Tour::all();
        $airplane=Tour::where([['type', '=', 'airplane'],['sale','!=',1]])->get();
        $earth=Tour::where([['type', '!=', 'airplane'],['sale','!=',1]])->get();
        $sale=Tour::where('sale', '=', 1)->get();
        return view('tour',compact('tour','airplane','earth','sale','user'));
    }

}
