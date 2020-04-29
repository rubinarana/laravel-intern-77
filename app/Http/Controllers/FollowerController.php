<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Followers;

class FollowerController extends Controller
{
    public function follow(Request $request) 
    {
        $user_id = $request->input('user_id');

        $follower = Followers::firstOrCreate([
            'user_id' => $user_id,
            'follower_id' => auth()->user()->id
        ]);
        
        $user = \App\User::with('following', 'followers')->find($user_id);

        return $this->ajax_response($request, $user);

        
    }

    public function unfollow(Request $request) 
    {
        $user_id = $request->input('user_id');

        $follower = Followers::where([
            'user_id' => $user_id,
            'follower_id' => auth()->user()->id
        ])->first();

        if($follower)
            $follower->delete();
        
        $user = \App\User::with('following', 'followers')->find($user_id);
        
        return $this->ajax_response($request, $user);
        
    }

    private function ajax_response($request, $user) {
        if($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'follower' => $user->followers->count(),
                'following' => $user->following->count()
            ]);
        }     
        return back();
    }
}
