<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    //
    protected $fillable = [

        'title','description','date_realisation','photo','photo_name'
    ];
}
