<?php

namespace App\Http\Controllers\Tour;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourchosenController extends Controller
{
    public function index(Request $request)
    {
        $airplane=Tour::where([['type', '=', 'airplane'],['sale','!=',1],['tag','=',$request->city]])->get();
        $earth=Tour::where([['type', '!=', 'airplane'],['sale','!=',1],['tag','=',$request->city]])->get();
        $sale=Tour::where([['sale', '=', 1],['tag','=',$request->city]])->get();
        return view('tourchosen',compact('airplane','earth','sale'));
    }
}

