<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RestaurantInfo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RestaurantInfoController extends Controller
{
    public function index(){

        $restaurantinfo=RestaurantInfo::all();
        return view('admin.restaurantinfo.index',compact('restaurantinfo'));
    }
    public function edit($id){

        $restaurantinfo=RestaurantInfo::findOrFail($id);
        return view('admin.restaurantinfo.edit',compact('restaurantinfo'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);
        // get form image
            $restaurantinfo=RestaurantInfo::find($id);
        $restaurantinfo->email = $request->email;
        $restaurantinfo->phone = $request->phone;
        $restaurantinfo->address = $request->address;
        $restaurantinfo->fb_link = $request->fb_link;
        $restaurantinfo->tw_link = $request->tw_link;
        $restaurantinfo->gplus_link = $request->gplus_link;
        $restaurantinfo->ln_link = $request->ln_link;
        $restaurantinfo->save();
        Toastr::success('restaurantinfo has been Updated :)', 'Success');
        return redirect()->route('restaurantinfo.index');


    }
}
