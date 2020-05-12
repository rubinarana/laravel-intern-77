<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Skill extends Model
{
     protected $fillable =['user_id','title','description'];
   
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

}