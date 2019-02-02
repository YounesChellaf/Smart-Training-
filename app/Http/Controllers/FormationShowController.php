<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationShowController extends Controller
{
    //
    public function show(){
        return view('dashboard.formation');
    }
}
