<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcribe extends Model
{
    protected $fillable = [
        'name','email','phone','project','content'
    ];
}
