<?php
namespace App\Http\Controllers;






use App\Services\SkillService;

use App\Experience;
use App\SocialLink;
use Illuminate\Http\Request;
use App\User;
use App\Services\UserProfileServices;
use App\userprofile;
use App\Http\Requests\UserProfileRequest;
use App\Services\UserProfileServices;

use App\Services\ReferenceService;

use App\Services\EducationDetailService;

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

    public function userdetail()
    {
        return view('skills');
    }


	  function addUserSkill(Request $request){
        $skillDetail = SkillService::insertSkill($request);
        return back();
    }

	public function create(RegisterSkillRequest $request)
	{
		$skill=SkillService::registeredSkill($request);
		if (!is_null($skill)) {
			ResponseService::sendHtmlResponse($skill,'skills','skill sucessfully added');
		}
	}
    function educationDetail()
      
    public function references()
    {

        $user = auth()->user();
        return view('references')->with('user', $user);
    }

    public function addReferences(Request $request)
    {
        ReferenceService::AddReferenceData($request);
        return back();
    }

    public function create(RegisterSkillRequest $request)
    {
        $skill = SkillService::registeredSkill($request);
        if (!is_null($skill)) {
            ResponseService::sendHtmlResponse($skill, 'skills', 'skill sucessfully added');
        }
    }
    function educationDetail()
    {
        $user = auth()->user();
        return view('EducationDetail')->with('user', $user);
    }
    function educationDetail2()
    {
        $user = auth()->user();
        return view('references')->with('user', $user);
    }
    function addEducationDetails(Request $request)
    {

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
    {
        UserProfileServices::store($request);
        return back();
    }
}

 -->

