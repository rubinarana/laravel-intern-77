<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController2 extends Controller
{
    public function users() {
        $users = \App\User::paginate(10);
        return view('users_view')->with('users', $users);
    }
    function educationDetail(){
        $user = auth()->user();
        return view('EducationDetail')->with('user',$user);
    }
    function addEducationDetails(Request $request){
        $validation = array(
            'institute'=>'required',
            'degree'=>'required',
            'started_date'=>'required',
            'end_date'=>'required'
            );

    $request->validate($validation);
    $user_id = $request->input('user_id');
     
    $educationDetail = \App\EducationDetail::Create([
            'user_id'=> $request->get('user_id'),
            'institute'=>$request->get('institute'),
            'degree'=>$request->get('degree'),
            'started_date'=>$request->get('started_date'),
            'end_date'=>$request->get('end_date')
        ]);
        return back();

    }

}
