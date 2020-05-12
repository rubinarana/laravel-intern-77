<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SkillService;

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

	  // function addUserSkill(Request $request){
   //      $skillDetail = SkillService::insertSkill($request);
   //      return back();
   //  }
}
