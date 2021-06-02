<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['id','course_id','title','description'];

    public function course(){
    	return $this->hasOne('App\Models\Course','id','course_id')->withDefault(['name'=>'Deleted']);

    }
    public function page(){
    	return $this->hasMany('App\Models\Page','module_id','id');
    }
}
