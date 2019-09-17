<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    protected $fillable = [
        'post_id','title','content'
    ];
    public function post(){
    	return $this->belongsTo(Post::class);
    }
}
