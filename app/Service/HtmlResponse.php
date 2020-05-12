<?php
namespace App\Service;
use App\Http\Requests\User\SocialRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\SocialLink;
 class HtmlResponse{
     public static function sendHtmlResponse($body,$view='',$message)
     {
         if(!empty($view))
         {
             return view($view);
         }
     }
 }
