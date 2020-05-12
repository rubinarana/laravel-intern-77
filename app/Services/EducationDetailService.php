<?php

namespace App\Services;
use App\EducationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class EducationDetailService{
    public static function insertEducationDetail(Request $request){
        // dd($request->get('degree'));
        // print_r(auth()->user()->id);
        // print_r($request->institute);
        // print_r($request->degree);
        // print_r($request->started_date);
        // print_r($request->end_date);
        // die();
        try {
            $institute = $request->institute;
            $degree = $request->degree;
            $institute = $request->institute;
            $started_date = $request->started_date;
            $end_date = $request->end_date;

            for($count = 0; $count < count($institute); $count++)
            {
             $data = array(
              'user_id' => auth()->user()->id,
              'institute'  => $institute[$count],
              'degree' => $degree[$count],
              'started_date'  => $started_date[$count],
              'end_date'=>$request->get('end_date')              
             );
             $insert_data[] = $data; 
            }
            $EducationDetail =EducationDetail::insert($insert_data);
            return response()->json([
                'success'  => 'Data Added successfully.'
               ]);
            // alternative 

            // $EducationDetail = EducationDetail::Create([
            //     'user_id'=> auth()->user()->id,
            //     'institute'=>$request->get('institute'),
            //     'degree'=>$request->get('degree'),
            //     'started_date'=>$request->get('started_date'),
            //     'end_date'=>$request->get('end_date')
            //     ]);
                if($EducationDetail){
                    return $EducationDetail;
                }
                throw new Exception('Form not submitted');
            } catch (Exception $e) {
                print_r($e->getMessage());
                echo '<br/>';
                print_r($e->getCode());
                echo '<br/>';
                print_r($e->getLine());
                die();
                Log::error($e->getMessage());
                return null;
                
            }     
            
            
                   }
    }