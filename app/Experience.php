<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable =['work_place','user_id','start_at','end_at'];

}
