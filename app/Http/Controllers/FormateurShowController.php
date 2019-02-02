<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormateurShowController extends Controller
{
    //
    public function show(){
        return view('dashboard.formateur');
    }
}
