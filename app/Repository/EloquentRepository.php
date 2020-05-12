<?php

namespace App\Repository;
use App\Repository\MainRepository;
use App\userprofile;
class EloquentRepository implements MainRepository
{
    public function create(int $user_id,String $address,String $contact,String $bio):void
    {
        UserProfile::firstOrCreate([
            'user_id' => $user_id,
            'address'=>$address,
            'contact_no'=>$contact,
            'bio'=>$bio
        ]);
        
    }
}