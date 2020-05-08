<?php

namespace App\Http\Controllers;
use App\userprofile;
use Illuminate\Http\Request;

class IndexController2 extends Controller
{
    public function users() {
        $users = \App\User::paginate(10);
        return view('users_view')->with('users', $users);
    }

    public function userprofile(Request $request)
    {
        $data=request()->validate([
         'Address'=>'required',
         'Contact'=>'required',
         'Bio'=>'required|min:20'
        ]);
        $user_id=auth()->user()->id;
        $address=$request->input('Address');
        $contact=$request->input('Contact');
        $bio=$request->input('Bio');
        UserProfile::firstOrCreate([
            'user_id' => $user_id,
            'address'=>$address,
            'contact_no'=>$contact,
            'bio'=>$bio
        ]);
        return back();

    }
}
