<?php

namespace App\Http\Controllers;
use App\Http\Requests\User\SocialRequest;
use Illuminate\Http\Request;
use App\SocialLink;
use App\Service\Social;
use App\Service\HtmlResponse;
class SocialController extends Controller
{
    public function index(){
        $data = SocialLink::all();
        return view('social_links',compact('data'));
    }
    public function StoreSocial(SocialRequest $request){
        $user = Social::register($request);
           return HtmlResponse::sendHtmlResponse($user,'social_link','successfully store data in database');



    }
}
