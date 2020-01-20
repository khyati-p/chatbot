<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Chathistory extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'chathistory';
    
    protected $fillable = [
        'userid', 'user','chat','time'
    ];
}

