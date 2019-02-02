<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'first_name','last_name','date_birth','wilaya','sexe','formation_id','CCP','motivation'
    ];
    //
}
