<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $user =  \App\User::with('following', 'followers')->find(1);
        
        $followers = $user->followers;
        $following = $user->following;

        // dd($followers);

        return view('welcome')->with(['user' => $user, 'newInfo' => 'newvalue']);
        // return view('welcome')->withFollowers($followers)->withFollowing($following);
    }


    public function show($username) {
        // dd($username);
        $user =  \App\User::with('following', 'followers')->where('username', $username)->first();
        
        $followers = $user->followers;
        $following = $user->following;

        // dd($followers);

        // return view('welcome')->with(['user' => $user, 'newInfo' => 'newvalue']);
        return view('welcome', array('user' => $user, 'newInfo' => 'newwer'));
        
    }

    // public
}
