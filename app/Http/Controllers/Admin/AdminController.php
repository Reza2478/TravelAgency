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
        $tour=Tour::all();
        $user=User::all();
        return view('admin',compact('tour','user'));
    }
    public function delete($id)
    {
        $temp=Tour::find($id);
        $temp->delete();
        return back()->with('status','Deleted successfuly!');
    }
}
