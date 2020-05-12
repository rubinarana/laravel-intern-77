<?php
   namespace App\Service;
   use App\Http\Requests\User\SocialRequest;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades;
   use App\SocialLink;

   class Social{
      public static function  Register(SocialRequest $request){
          $user = SocialLink::Create([
              'user_id'=> auth()->user()->id,
              'name'=>$request->get('name'),
              'link'=>$request->get('link')

          ]);
      }
       public static function SocialLinks(Request $request){
          $req = $request->all();

           for($i = 0 ; $i < count($req['work_place']); $i++) {
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


//   $social = SocialLink::Create([
//   'user_id'=> auth()->user()->id,
//   'name'=>$request->get('name'),
//   'link'=>$request->get('link')
   }
