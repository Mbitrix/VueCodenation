<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $fillable['id','page_id','type','title','description','url','link'];
    public function page(){
    	return $this->hasOne('App\Models\Page','id','page_id')->withDefault(['name'=>'Deleted']);
    }
}
