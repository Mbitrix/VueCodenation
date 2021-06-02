<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;
    protected $fillable['id','quistion_id','choice'];
    
    public function question(){
    	return $this->haOne('App\Models\Question','id','question_id')->withDefault(['name'=>'Deleted']);
    }
}
