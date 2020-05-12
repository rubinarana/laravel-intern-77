<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('profile')->with('user', $user);
    }

    public function show($username) {
        // dd($username);
        $user =  \App\User::with('following', 'followers')->where('username', $username)->first();

      /*  $followers = $user->followers;
        $following = $user->following;

        // dd($followers);

        // return view('welcome')->with(['user' => $user, 'newInfo' => 'newvalue']);
        return view('profile', array('user' => $user, 'newInfo' => 'newwer'));*/

    }

}
