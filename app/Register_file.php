<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register_file extends Model
{
    public $timestamps=false;
    protected $table = 'register_file';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'email',
        'phone',
    ];
}
