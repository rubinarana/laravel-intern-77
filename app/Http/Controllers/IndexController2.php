<?php

namespace App\Http\Controllers;

use App\Experience;
use App\SocialLink;
use Illuminate\Http\Request;
use App\User;

class IndexController2 extends Controller
{
    public function users()
    {
        $users = \App\User::paginate(10);
        return view('users_view')->with('users', $users);
    }

    public function getExperience(Request $request)
    {
        return view('experience');
    }

    public function socialLinks()
    {
        return view('social_links');
    }

    public function Experience(Request $request)
    {
        //$exp = auth()->user()->id;
        //dd($exp);
        $req = $request->all();

        for ($i = 0; $i < count($req['work_place']); $i++) {
            $user = Experience::create([
                'user_id' => auth()->user()->id,
                'work_place' => $req['work_place'][$i],
                'start_at' => $req['start_at'][$i],
                'end_at' => $req['end_at'][$i]
            ]);
            $user->save();
        }
        return response()->json([
            'message' => 'successfully post'
        ]);
        return back;
    }

    public function Social(Request $request)
    {
        //dd('here');
        $req = $request->all();
        //  dd($req);
        for ($i = 0; $i < count($req['name']); $i++) {
            $user = SocialLink::create([
                'user_id' => auth()->user()->id,
                'name' => $req['name'][$i],
                'link' => $req['link'][$i],
            ]);
            $user->save();
        }
        return response()->json([
            'message' => 'successfully post'
        ]);
        return back;
    }

}

