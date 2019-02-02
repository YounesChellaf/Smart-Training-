<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;
use App\Formation;

class InscriptionShowController extends Controller
{
    //
    public function show($id){
        $formation = Formation::find($id);
        return view('inscription')->with('formation',$formation);
    }

    public function show_inscrit($id){
        $formation = Formation::find($id);
        return view('dashboard.inscrit_form')->with('formation',$formation);
    }
    public function show_inscrit_formation($id){
        $inscription = Inscription::find($id);
        return view('dashboard.inscrit_formation')->with('inscription',$inscription);
    }
    public function store(Request $request, $id) {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $date_n = $request->input('date_birth');
        $wilaya = $request->input('wilaya');
        $ccp = $request->input('CCP');
        $motivation = $request->input('Motivation');

        Inscription::create([
            'first_name' => $nom,
            'last_name' => $prenom,
            'date_birth'=> $date_n,
            'wilaya' => $wilaya,
            'CCP' => $ccp,
            'motivation' => $motivation,
            'formation_id' => $id ,
        ]);
        return redirect('/');
    }
}
