<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(\App\Models\User $user)

    {      
        return view('profiles.index', compact('user'));
    }

    public function edit(\App\Models\User $user){
        return view('profiles.edit', compact('user'));
    }

    public function update(\App\Models\User $user){
        $data = request()->validate([
            'Introduction'=>'required',
            'Address'=>'required',
            'Birthday'=>'required',
            'image'=>'',
        ]);
        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
