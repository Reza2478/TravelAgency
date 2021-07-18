<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $tour = Tour::all();
        $user = User::all();
        $purchase = Purchase::all();
        return view('admin', compact('tour', 'user', 'purchase'));
    }
    public function delete($id)
    {
        $temp = Tour::find($id);
        $temp->delete();
        return back();
    }
    public function edit(Request $request)
    {
        $updateDetails = [
            'from' => $request->from,
            'to' => $request->to,
            'amount' => $request->amount,
            'capacity' => $request->capacity,
            'departuredate' => $request->departuredate,
            'returndate' => $request->returndate,
            'timewent' => $request->timewent,
            'timeback' => $request->timeback,
            'tag' => $request->tag,
            'type' => $request->type,
            'services' => $request->services,
            'hotel' => $request->hotel,
            'travelcompany' => $request->travelcompany,
            'image' => $request->image,
            'staytime' => $request->staytime,
        ];

        DB::table('tours')
            ->where('id', $request->id)
            ->update($updateDetails);
        return back();
    }
    public function show()
    {
        return view('addtour');
    }
    public function insert(Request $request)
    {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imagename);
        $data = [
            'from' => $request->from,
            'to' => $request->to,
            'amount' => $request->amount,
            'capacity' => $request->capacity,
            'departuredate' => $request->departuredate,
            'returndate' => $request->returndate,
            'timewent' => $request->timewent,
            'timeback' => $request->timeback,
            'tag' => $request->tag,
            'type' => $request->type,
            'services' => $request->services,
            'hotel' => $request->hotel,
            'travelcompany' => $request->travelcompany,
            'image' => $imagename,
            'staytime' => $request->staytime,
        ];
        Tour::create($data);
        return redirect('admin');
    }
    public function addtimeline(Request $request)
    {
        $data = [
            'city' => $request->city,
            'time' => $request->time,
            'status' => $request->status,
            'tour_id' => $request->tour_id,
        ];
        Timeline::create($data);
        return redirect('admin');
    }
}
