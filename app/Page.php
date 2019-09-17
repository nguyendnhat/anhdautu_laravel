<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
   protected $fillable = [
        'title','alias','parent_id','order','meta_keywords','meta_description','meta_title','status','content','status'
    ];
   public $timestamps=false;
   public function children(){
	    return $this->hasMany('App\Page', 'parent_id');
   }
   public function parent(){
	    return $this->belongsTo('App\Page', 'parent_id');
   }
}
