<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kavenegar;

class AdminController extends Controller
{

    public function index()
    {
        $adm = Auth::user();
        $tour = Tour::all();
        $user = User::all();
        $purchase = Purchase::all();
        return view('admin', compact('adm', 'tour', 'user', 'purchase'));
    }
    public function deletetour($id)
    {
        $temp = Tour::find($id);
        $temp->delete();
        return back();
    }
    public function deleteuser($id)
    {
        $temp = User::find($id);
        $temp->delete();
        return back();
    }
    public function deletetimeline($id)
    {
        $temp = Timeline::find($id);
        $temp->delete();
        return back();
    }
    public function edittimeline(Request $request)
    {
        $updateDetails = [
            'city' => $request->city,
            'hotel' => $request->hotel,
            'services' => $request->services,
            'staytime' => $request->staytime,
        ];

        DB::table('timelines')
            ->where('id', $request->id)
            ->update($updateDetails);
        return back();
    }
    public function editinfo(Request $request)
    {
        if ($request->password !== null) {
            $updateDetails = [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phonenumber' => $request->phonenumber,
                'email' => $request->email,
                'username' => $request->username,
                'password' => bcrypt($request->password),
            ];
        } else {
            $updateDetails = [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phonenumber' => $request->phonenumber,
                'email' => $request->email,
                'username' => $request->username,
            ];
        }
        DB::table('users')
            ->where('id', $request->idi)
            ->update($updateDetails);
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
            'travelcompany' => $request->travelcompany,
            'image' => $request->image,
            'staytime' => $request->staytime,
            'sale' => $request->sale,
        ];

        DB::table('tours')
            ->where('id', $request->id)
            ->update($updateDetails);

        $users = User::all();
        if ($request->sale == 1) {
            foreach ($users as $item) {
                foreach ($item->interests as $interest) {
                    if ($interest->cityname === $request->tag) {
                        try {
                            $sender = "1000596446";        //This is the Sender number

                            $message = "تور {$request->tag} تخفیف خورده است جهت شرکت در تور به وب سایت آسان گشت مراجعه فرمایید !\n\n لذت سفر با آسان گشت ";        //The body of SMS

                            $receptor = "{$item->phonenumber}";            //Receptors numbers

                            $result = Kavenegar::Send($sender, $receptor, $message);
                            if ($result) {
                                foreach ($result as $r) {
                                    echo "messageid = $r->messageid";
                                    echo "message = $r->message";
                                    echo "status = $r->status";
                                    echo "statustext = $r->statustext";
                                    echo "sender = $r->sender";
                                    echo "receptor = $r->receptor";
                                    echo "date = $r->date";
                                    echo "cost = $r->cost";
                                }
                            }
                        } catch (\Kavenegar\Exceptions\ApiException $e) {
                            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
                            echo $e->errorMessage();
                        } catch (\Kavenegar\Exceptions\HttpException $e) {
                            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
                            echo $e->errorMessage();
                        }
                    }
                }
            }
        }

        return back();
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
            'travelcompany' => $request->travelcompany,
            'image' => $imagename,
            'staytime' => $request->staytime,
        ];
        Tour::create($data);
        return redirect('admin');
    }
    public function timeline($id)
    {
        $timeline = Timeline::where('tour_id', '=', $id)->get();
        return view('addtimeline', compact('timeline', 'id'));
    }
    public function addtimeline(Request $request)
    {
        $data = [
            'city' => $request->city,
            'staytime' => $request->staytime,
            'hotel' => $request->hotel,
            'services' => $request->services,
            'tour_id' => $request->tour_id,
        ];
        Timeline::create($data);
        return redirect("addtimeline/" . $request->tour_id);
    }
}
