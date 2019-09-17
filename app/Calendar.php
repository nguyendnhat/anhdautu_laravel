<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
	public $timestamps=false;
    protected $fillable = [
        'title','time','post_id','content'
    ];
    public function post(){
    	return $this->belongsTo(Post::class);
    }
}
