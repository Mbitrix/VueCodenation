<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable ['id','quiz_id','question','answer']
    
    public function quiz(){
    	return $this->hasOne('App\Models\Quiz','id','quiz_id')->withDefault(['name'=>'Deleted']);
    }
    public function choice(){
    	return $this->hasMany('App\Models\Choice','question_id','id');
    }

    public function answer(){
    	return $this->hasMany('App\Models\Answer','question_id','id');
    }
}
