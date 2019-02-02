<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    //
    protected $fillable = [
        'name','job','photo','photo_name','biographie','facebook','linkedIn','Email'
    ];
}
