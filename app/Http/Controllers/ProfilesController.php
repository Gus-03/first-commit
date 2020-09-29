<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
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
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(\App\Models\User $user){
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'Introduction'=>'required',
            'Address'=>'required',
            'Birthday'=>'required',
            'image'=>'',
        ]);
        

        if(request('image')){
            $imagePath =request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(600,600);
            $image->save();
        }
        auth()->user()->profile->update(array_merge(
            $data, ['image' =>$imagePath]
        ));
        return redirect("/profile/{$user->id}");
    }
}
