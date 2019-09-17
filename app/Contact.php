<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps=false;
   protected $fillable = [
        'alias','name','content','iframe','img'
    ];
}
