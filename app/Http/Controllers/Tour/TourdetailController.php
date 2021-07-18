<?php

namespace App\Http\Controllers\Tour;
use App\Models\Tour;
use App\Models\Purchase;
use App\Models\Timeline;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourdetailController extends Controller
{
    public function index($id)
    {
        $user = Auth::user();
        $info=Tour::find($id);
        $remain = $user->credit-$info->amount;
        $details=$info->timelines;
        return view('tourdetail',compact('info','details','remain'));
    }
    public function buy($id)
    {
        $user = Auth::user();
        $tour=Tour::find($id);
        $amount=$tour->amount;
        $credit=$user->credit;
        $result=$credit-$amount;
        User::where('id', $user->id)->update(['credit' => $result]);
        Tour::where('id', $id)->decrement('capacity');
        $data=[
            'tour_id'=>$id,
            'track'=>rand(),
        ];
        $purchase=Purchase::create($data);
        $user = Auth::user();
        $user->purchases()->attach($purchase->id);
        return redirect('user');
    }
}
