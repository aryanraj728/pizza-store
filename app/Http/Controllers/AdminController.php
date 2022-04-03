<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Reservation;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function reservation(Request $request)
{
    $data = new reservation;
    

    $data->name=$request->name;

    $data->email=$request->email;

    $data->phone=$request->phone;

    $data->guest=$request->guest;

    $data->date=$request->date;

    $data->time=$request->time;

    $data->message=$request->message;


    $data->save();

    return redirect()->back();

}
public function viewreservation()
{
    $data=reservation::all();
    return view("admin.adminreservation",compact("data"));
}
}
