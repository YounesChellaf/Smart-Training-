<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/inscription/{id}','InscriptionShowController@show');
Route::get('/dash/inscrit/{id}','InscriptionShowController@show_inscrit');
Route::get('/dash/inscrit_formation/{id}','InscriptionShowController@show_inscrit_formation');
Route::post('/inscription/{id}','InscriptionShowController@store');
Route::post('/','MessageController@storeMessage');
Route::prefix('dash')->middleware('auth')->group(function (){
    Route::get('inscrit',function (){
        return view('dashboard.inscrit');
    });
    Route::resource('formation/Add','FormationController');
    Route::resource('realisation/Add','RealisationController');
    Route::resource('formateur/Add','FormateurController');
    Route::get('formateur/delete/{id}','FormateurController@destroy');
    Route::post('formation/update/{id}','FormationController@update');
    Route::post('formateur/update/{id}','FormateurController@update');
    Route::post('realisation/update/{id}','RealisationController@update');
    Route::get('formation/delete/{id}','FormationController@destroy');
    Route::get('realisation/delete/{id}','RealisationController@destroy');
    Route::get('formation/show','FormationShowController@show');
    Route::get('realisation/show','RealisationShowController@show');
    Route::get('formateur/show','FormateurShowController@show');
    Route::get('message/{id}','MessageController@show');
    Route::get('/',function (){
        $formation = \App\Formation::all();
        $formateur = \App\Formateur::all();
        $realisation = \App\Realisation::all();
        $inscription = \App\Inscription::all();
        $message = \App\Message::all();
        return view('dashboard.counts_section')->with('formation',$formation)->with('formateur',$formateur)
            ->with('realisation',$realisation)->with('inscription',$inscription)->with('message',$message);
    });

});

Route::get('/',function (){
    $formateur = \App\Formateur::all()->toArray();
    return view('smart')->with('formateur',$formateur);
});

Route::get('/login',function (){
    return view('login');
});
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
