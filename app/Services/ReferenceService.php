<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Reference;

class ReferenceService{
    public static function AddReferenceData(Request $request){
        $data = array(
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'designation' => 'required'
        );
    
        $request->validate($data);
        $user_id = auth()->user()->id;
        $references = \App\Reference::Create([
            'user_id'=>$user_id,
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
            'designation' => $request->get('designation')
        ]);
    }
}