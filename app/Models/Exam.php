<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable['id','quiz_id','student','marks','out_of','grade','date_taken','date_completed','markedby'];

    public function quiz(){
    	 return $this->hasOne('App/Models/Quiz','id','quiz_id')->withDefault(['name'=>'Deleted']);
    }
    public function answer(){
    	return $this->hasMany('App\Models\Answer','exam_id','id');
    }
   
}
