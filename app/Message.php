<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable = [
        'name_user','mail_user','num_user','message'

    ];

    //
}
