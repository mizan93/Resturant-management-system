<?php

namespace App\Http\Controllers;
use App\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContackController extends Controller
{
    public function contact(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        Toastr::success('Contact info sent.','Success');
              return redirect()->back();
    }
}
