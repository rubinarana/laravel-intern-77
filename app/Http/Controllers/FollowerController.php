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

        if($request->ajax()) {
            return response()->json([
                'status' => 'success'
            ]);
        }

        return $this->ajax_response($request);

        
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
        
        return $this->ajax_response($request);
        
    }

    private function ajax_response($request) {
        if($request->ajax()) {
            return response()->json([
                'status' => 'success'
            ]);
        }     
        return back();
    }
}
