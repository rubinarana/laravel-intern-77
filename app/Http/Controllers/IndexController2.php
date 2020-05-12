<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReferenceService;

class IndexController2 extends Controller
{
    public function users()
    {
        $users = \App\User::paginate(10);
        return view('users_view')->with('users', $users);
    }

<<<<<<< HEAD
    public function references()
    {
=======
    public function userdetail()
	{
		return view('skills');
	}

	public function create(RegisterSkillRequest $request)
	{
		$skill=SkillService::registeredSkill($request);
		if (!is_null($skill)) {
			ResponseService::sendHtmlResponse($skill,'skills','skill sucessfully added');
		}
	}
    function educationDetail(){
        $user = auth()->user();
        return view('EducationDetail')->with('user',$user);
    }
    function educationDetail2(){
>>>>>>> 7698de74a5ffb82ead0cced0d775f41435bb264e
        $user = auth()->user();
        return view('references')->with('user', $user);
    }
<<<<<<< HEAD

    public function addReferences(Request $request)
=======
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
 
    public function userprofile(UserProfileRequest $request)
>>>>>>> 7698de74a5ffb82ead0cced0d775f41435bb264e
    {
        ReferenceService::AddReferenceData($request);
        return back();
    }
}