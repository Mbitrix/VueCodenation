<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','description','image'];
	public function module(){
		return $this->hasMany('App\Models\Module','course_id','id');
	} 
	public function studentCourse(){
		return $this->hasMany('App\Models\StudentCourse','course_id','id');
	}  
}
