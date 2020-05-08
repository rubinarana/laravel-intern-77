<?php

namespace App\Http\Controllers;

use App\Services\UserProfileServices;
use App\userprofile;



use App\Http\Requests\UserProfileRequest;
use Illuminate\Http\Request;


class IndexController2 extends Controller
{
    public function users() {
        $users = \App\User::paginate(10);
        return view('users_view')->with('users', $users);
    }

    public function userprofile(UserProfileRequest $request)
    {
        UserProfileServices::store($request);
        return back();

    }
}
