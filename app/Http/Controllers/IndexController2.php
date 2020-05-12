<!-- <?php


namespace App\Http\Controllers;

use App\Services\UserProfileServices;
use App\userprofile;



use App\Http\Requests\UserProfileRequest;
use Illuminate\Http\Request;

use App\Services\SkillService;

use App\Services\EducationDetailService;

>>>>>>> 7698de74a5ffb82ead0cced0d775f41435bb264e

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
 
    public function userprofile(UserProfileRequest $request)
    {
        UserProfileServices::store($request);
        return back();

    }
}
 -->