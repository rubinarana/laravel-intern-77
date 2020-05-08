<?php

namespace App\Services;

use App\userprofile;
use Illuminate\Http\Request;

class UserProfileServices
{
    public static function store(Request $request)
    {
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
    public static function view()
    {

    }
}