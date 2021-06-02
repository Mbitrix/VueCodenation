<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable=['id','title','description','duration','totalmarks'];
    public function question(){
    	return $this->hasMany('App\Models\Question','quiz_id','id');
    }

    public function exam(){
    	return $this->hasMany('App\Models\Exam','quiz_id','id');
    }
}
