<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realisation;
use Illuminate\Support\Facades\Redirect;

class RealisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.realisationAdd');
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $title = $request->input('titre');
        $description = $request->input('description');
        $date_realisation = $request->input('date_r');
        $photo = $request->file('photo_realisation');
        $destpath = 'assets/img';
        $file_name = $photo->getClientOriginalName();
        $photo->move($destpath,$file_name);

        Realisation::create([
            'title' => $title,
            'description' =>$description,
            'date_realisation' => $date_realisation,
            'photo' => $photo ,
            'photo_name' => $file_name,

        ]);
        return Redirect::back();
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
      $titre = $request->input('titre');
      $description =$request->input('description');
      $date_r = $request->input('date_r');
      $image = $request->file('image');
      $destpath = 'assets/img';
      $file_name = $image->getClientOriginalName();
      $image->move($destpath,$file_name);

      $realisation = Realisation::find($id);

      $realisation->title =$titre;
      $realisation->description = $description;
      $realisation->date_realisation = $date_r;
      $realisation->photo = $image;
      $realisation->photo_name = $file_name;
      $realisation->save();
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
        Realisation::destroy($id);
        return redirect()->back();
        //
    }
}
