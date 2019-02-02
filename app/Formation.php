<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //
    protected $fillable = [
        'title','description','date_debut','date_fin','date_fin_inscription','image','name_formateur','tarif','photo_name'
    ];
}
