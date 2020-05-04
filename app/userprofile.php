<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userprofile extends Model
{
    protected $fillable = [
        'education_details', 'training', 'work_experience','user_id'
    ];
}
