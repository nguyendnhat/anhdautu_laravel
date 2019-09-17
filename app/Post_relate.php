<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_relate extends Model
{
	public $timestamps=false;
   protected $fillable = [
        'img'
    ];
    public function post(){
    	return $this->belongsTo(Post::class);
    }
}
