<?php

namespace App\Http\Controllers;
use App\Models\ManageBooking;
use Illuminate\Http\Request;

class ManageBookingController extends Controller
{
    public function index()
    {
        $category = ManageBooking::all();
        return view('managebooking',compact('category'));
    }
    public function save(Request $request)
    {
        $id = $request->id;
        $data = ManageBooking::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect()->back();


    }
    public function deletebooking($id)
    {
        $user = ManageBooking::find($id);
        $user->delete();
        return back();
    }

    public function testominal()
    {
        return view('managetestinominal');
    }
}
