<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Models\Purchase;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('access')->only('index');
    }
    public function index()
    {
        $user = Auth::user();
        $details=$user->load(['purchases.tour']);
        $user_interests=array_column($user->interests->toArray(),'id');
        $all_interests=Interest::all();
        return view('user',compact('user','details','all_interests','user_interests'));
    }
    public function edit_interest(Request $request)
    {
        $user = Auth::user();
        $user->interests()->sync($request->interest_id);
        return back();
    }
    public function cancel($id)
    {
        $user = Auth::user();
        $temp=Purchase::find($id);
        $tour_id=$temp->tour_id;
        $tour=Tour::find($tour_id);
        $amount=$tour->amount;
        $credit=$user->credit;
        $result=$credit+$amount;
        User::where('id', $user->id)->update(['credit' => $result]);
        Purchase::where('id', $temp->id)->update(['cancel' => 1]);
        Tour::where('id', $tour_id)->increment('capacity');
        return redirect('user');
    }
}
