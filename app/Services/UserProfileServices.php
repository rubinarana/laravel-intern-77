<?php

namespace App\Services;

use App\userprofile;
use Illuminate\Http\Request;
use App\Repository\EloquentRepository;
class UserProfileServices
{
    public static function store(Request $request)
    {
        $user_id=auth()->user()->id;
        $address=$request->input('Address');
        $contact=$request->input('Contact');
        $bio=$request->input('Bio');
        
        $eloquent=new EloquentRepository();
        $eloquent->create($user_id,$address,$contact,$bio);
        
        return back();

    }
    public static function view()
    {

    }
}