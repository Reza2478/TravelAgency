<?php

namespace App\Http\Controllers\Tour;
use App\Models\Tour;
use App\Models\Timeline;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourdetailController extends Controller
{
    public function index($id)
    {
        $info=Tour::find($id);
        $detail=$info->timelines;
        return view('tourdetail',compact('info','detail'));
    }
}
