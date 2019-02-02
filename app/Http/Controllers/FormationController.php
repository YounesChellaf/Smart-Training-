<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.formationAdd');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $title =$request->input('titre');
        $description =$request->input('description');
        $date_d =$request->input('date_d');
        $date_f =$request->input('date_f');
        $date_fin_inscr =$request->input('date_fin_inscr');
        $tarif = $request->input('tarif');
        $name_formateur = $request->input('nom_formateur');
        $image = $request->file('photo_formation');
        $destpath = 'assets/img';
        $file_name = $image->getClientOriginalName();
        $image->move($destpath,$file_name);

        Formation::create([
            'title' => $title,
            'description' => $description,
            'date_debut' => $date_d,
            'date_fin' => $date_f,
            'date_fin_inscription' => $date_fin_inscr,
            'image' => $image,
            'photo_name' => $file_name,
            'name_formateur' => $name_formateur,
            'tarif' => $tarif,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $description =$request->input('description');
        $nom_f = $request->input('nom_formateur');
        $date_d = $request->input('date_d');
        $date_f = $request->input('date_f');
        $date_f_i = $request->input('date_f_i');
        $tarif = $request->input('tarif');
        $image = $request->file('photo_formation');
        $destpath = 'assets/img';
        $file_name = $image->getClientOriginalName();
        $image->move($destpath,$file_name);

        $formation = Formation::find($id);

        $formation->title =$title;
        $formation->description = $description;
        $formation->date_debut = $date_d;
        $formation->date_fin = $date_f;
        $formation->date_fin_inscription = $date_f_i;
        $formation->tarif = $tarif;
        $formation->name_formateur = $nom_f;
        $formation->image = $image;
        $formation->photo_name = $file_name;

        $formation->save();
        return redirect()->back();
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Formation::destroy($id);
        return redirect()->back();
    }
}
