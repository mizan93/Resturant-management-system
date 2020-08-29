<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $reservation=Reservation::latest()->get();
        return view('admin.reservation.index',compact('reservation'));
    }
    public function statusChange($id){
       $reservation=Reservation::findOrFail($id);
       $reservation->status=true;
       $reservation->save();
       Toastr::success('Reservation has been confirmed.','Success');
       return redirect()->back();
    }
    public function destroy($id){
        $reservation=Reservation::findOrFail($id);
        $reservation->delete();
        Toastr::success('Reservation has been Deletee.','Success');
        return redirect()->back();
    }
}
