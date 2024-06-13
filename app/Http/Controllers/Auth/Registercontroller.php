<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use  App\Http\Requests\UserValidate;

class Registercontroller extends Controller
{
    public function register(){
        return view('register');
        }

        public function store(UserValidate $request){
            // dd($request->all());

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->gender = $request->gender;
            $user->mo_no = $request->mo_no;
            $user->save();
            return redirect('/')->with('success','User registration successfully');


    }
}
