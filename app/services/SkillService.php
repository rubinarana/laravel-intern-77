<!-- <?php
namespace App\Services;

use Exception;
use App\Skill;
use Illuminate\http\Request;
use App\Services\SkillService;

class SkillService
{
	public static function userSkill(Request $request)
	{
		try{
			$skill = Skill::create($request);
			if ($skill) {
				return $skill;
			}
			throw new Exception("skill cannot be created");
			}
			catch(Exception $e){
				Log::error($e->getMessage());
				return null;
			}
		}
	}
}
?> -->