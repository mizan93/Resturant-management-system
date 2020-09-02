<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\ReservationConfirm;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    public function index(){
        $reservation_count=Reservation::where('status','false')->get();
        $reservation=Reservation::latest()->get();
        return view('admin.reservation.index',compact('reservation','reservation_count'));
    }
    public function statusChange($id){
       $reservation=Reservation::findOrFail($id);
       $reservation->status=true;
       $reservation->save();
       Notification::route('mail', $reservation->email)
            // ->route('nexmo', '5555555555')
            // ->route('slack', 'https://hooks.slack.com/services/...')
            ->notify(new ReservationConfirm());
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
