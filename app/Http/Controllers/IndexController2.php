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
}