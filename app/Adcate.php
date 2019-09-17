<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adcate extends Model
{
    protected $fillable = [
        'link','img','status'
    ];
    public function cate(){
    	return $this->belongsTo(Cate::class);
    }
}
