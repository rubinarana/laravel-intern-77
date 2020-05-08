<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController2 extends Controller
{
    public function users() {
        $users = \App\User::paginate(10);
        return view('users_view')->with('users', $users);
    }
    public function userdetail()
	{
		return view('skills');
	}

}
