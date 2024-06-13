<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use  App\Http\Requests\UserValidate;
use Illuminate\Support\Facades\Auth;
class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(!Auth::user()){
            return redirect('/');
        }
        $users = User::all();
        return view('list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(!Auth::user()){
            return redirect('/');
        }
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserValidate $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->gender = $request->gender;
        $user->mo_no = $request->mo_no;
        $user->save();
        return redirect('user/list')->with('success','User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('user/list')->with('error','User delete successfully');
    }
}
