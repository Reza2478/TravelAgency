<?php

namespace App\Http\Controllers\Tour;

use App\Models\Tour;
use App\Models\Purchase;
use App\Models\Timeline;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\PseudoTypes\False_;

class TourdetailController extends Controller
{
    public function index($id)
    {
        $user = Auth::user();
        $info = Tour::find($id);
        $remain = $user->credit - $info->amount;
        $details = $info->timelines;
        $temp = $user->load(['purchases.tour']);
        $accept = 1;
        $cancel=0;
        foreach ($temp->purchases as $item) {
            if ($item->tour->id == $id)
                $accept = 0;
            if ($item->tour->id == $id && $item->cancel == 1) 
                $cancel=1;
        }
        // print($cancel);
        // print($accept);
        return view('tourdetail',compact('info','details','remain','accept','cancel'));
    }
    public function buy(Request $request)
    {
        $user = Auth::user();
        $tour = Tour::find($request->id);
        $amount = ($tour->amount) * $request->number;
        $credit = $user->credit;
        $result = $credit - $amount;
        $capacity = $tour->capacity - $request->number;
        User::where('id', $user->id)->update(['credit' => $result]);
        Tour::where('id', $request->id)->update(['capacity' => $capacity]);
        $data = [
            'tour_id' => $request->id,
            'track' => rand(),
            'number' => $request->number,
        ];
        $purchase = Purchase::create($data);
        $user = Auth::user();
        $user->purchases()->attach($purchase->id);
        return redirect('user');
    }
}
