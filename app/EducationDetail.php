<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationDetail extends Model
{

    protected $fillable =['user_id','institute','degree','started_date','end_date'];
   
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
