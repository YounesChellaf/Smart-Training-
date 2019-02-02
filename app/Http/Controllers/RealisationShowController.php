<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealisationShowController extends Controller
{
    //
    public function show(){
        return view('dashboard.realisation');
    }
}
