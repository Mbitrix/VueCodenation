<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    protected $fillable['id','course_id','student_id']
    public function course(){
    	return $this->hasOne('App\Models\Course','id','course_id');
    }
    public function student(){
    	return $this->hasOne('App\Models\Student','id','student_id');
    }
}
