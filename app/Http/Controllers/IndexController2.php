<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EducationDetailService;

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
    function educationDetail2(){
        $user = auth()->user();
        return view('EducationDetail2')->with('user',$user);
    }
    function addEducationDetails(Request $request){
        
        // dd($request);
        // $validation = array(
        //     'institute'=>'required',
        //     'degree'=>'required',
        //     'started_date'=>'required',
        //     'end_date'=>'required'
        // );
        
        // $request->validate($validation);
        
        $educationDetail = EducationDetailService::insertEducationDetail($request);
        
        return back();
    }
    
}
