<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Sample extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'test123';
    
    protected $fillable = [
        'username', 'password'
    ];
}

