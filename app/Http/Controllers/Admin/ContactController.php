<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact=Contact::latest()->get();
        return view('admin.contact.index',compact('contact'));
    }
    public function show($id){
        $contact=Contact::findOrFail($id);
        return view('admin.contact.show',compact('contact'));
    }
    public function destroy($id){
        $contact=Contact::findOrFail($id);
        $contact->delete();
        Toastr::success('Contact message Deleted.','Success');
        return redirect()->back();
    }
}
