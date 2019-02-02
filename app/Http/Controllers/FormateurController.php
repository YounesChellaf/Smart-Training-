<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formateur;


class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.formateurAdd');

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

        $name = $request->input('nom_formateur');
        $job = $request->input('profession_formateur');
        $biographie = $request->input('biographie_formateur');
        $fb = $request->input('facebook_formateur');
        $linked = $request->input('linkedin_formateur');
        $mail = $request->input('mail_formateur');
        $photo = $request->file('photo_formateur');
        $destpath = 'assets/img';
        $name_file = $photo->getClientOriginalName();
        $photo->move($destpath,$name_file);

        Formateur::create([
        'name'=>$name,
        'job'=> $job,
        'biographie' =>$biographie,
            'facebook' =>$fb,
            'linkedIn' => $linked,
            'Email' => $mail,
            'photo' => $photo,
            'photo_name' => $name_file,
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
      $nom = $request->input('nom_formateur');
      $profession =$request->input('profession');
      $biographie = $request->input('biographie');
      $email = $request->input('email');
      $facebook = $request->input('facebook');
      $linkedin = $request->input('linkedin');
      $image = $request->file('photo_formateur');
      $destpath = 'assets/img';
      $file_name = $image->getClientOriginalName();
      $image->move($destpath,$file_name);

      $formateur = Formateur::find($id);

      $formateur->name =$nom;
      $formateur->job = $profession;
      $formateur->biographie = $biographie;
      $formateur->facebook = $facebook;
      $formateur->linkedIn = $linkedin;
      $formateur->Email = $email;
      $formateur->photo = $image;
      $formateur->photo_name = $file_name;

      $formateur->save();
      return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Formateur::destroy($id);
        return redirect()->back();
    }
}
