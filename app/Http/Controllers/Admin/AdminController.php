<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tour = Tour::all();
        $user = User::all();
        return view('admin', compact('tour', 'user'));
    }
    public function delete($id)
    {
        $temp = Tour::find($id);
        $temp->delete();
        return back()->with('status', 'Deleted successfuly!');
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
            'image' => $imagename
        ];
         Tour::create($data);
         return redirect('admin');
    }
}
