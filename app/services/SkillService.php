<?php
namespace App\Services;

use Exception;
use App\Services;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Log;

class SkillService
{
	public static function insertUserSkill(Request $request)
	{
		try{
			$title = $request->title;
            $description = $request->description;

            for($count = 0; $count < count($description); $count++)
            {
             $data = array(
              'user_id' => auth()->user()->id,
              'description' => $description[$count],            
             );
             $insert_data[] = $data; 
            }
            $Skill =Skill::insert($insert_data);
            return response()->json([
                'success'  => 'Data Added successfully.'
               ]);
                    if($Skill){
                    return $Skill;
                }
                throw new Exception('skill cannot be created');
            } catch (Exception $e) {
                Log::error($e->getMessage());
                return null; 
            }     
        }
	}
}
?>  