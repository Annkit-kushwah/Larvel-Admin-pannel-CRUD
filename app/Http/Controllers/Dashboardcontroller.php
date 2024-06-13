<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Dashboardcontroller extends Controller
{
    public function dashboard(){

        if(!Auth::user()){
            return redirect('/');
        }
        return view('dashboard');
    }
}
