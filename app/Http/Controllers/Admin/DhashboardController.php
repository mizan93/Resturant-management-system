<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DhashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function welcome(){
        return view('welcome');
    }
}
