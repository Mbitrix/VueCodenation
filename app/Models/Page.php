<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['id','module_id','title','notes','order'];
    public function module(){
    	return $this->hasOne('App\Models\Module','id','module_id')->withDefault(['name'=>'Deleted']);
    }
    public function resource(){
    	return $this->hasMany('App\Models\Resource','page_id','id');
    }
}
