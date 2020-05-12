<?php

namespace App\Repository;


interface MainRepository
{
    public function create(int $id,String $address,String $contact,String $bio):void;
}