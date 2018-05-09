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

Route::get('/login', function () {

    return view('/login/content');

   

});


Route::group([ 'prefix' => 'backend' ], function(){


	Route::get('/', function () {

    return view('index');


});

Route::get('/dashboard', function () {

    return view('dashboard/index');


});

    Route::get('/show', function () {

    return view('show/index');


});

    Route::get('/show/contact','ContactsController@show');

    Route::get('/show/{id}','ContactsController@index');
   
    Route::post('/new','ContactsController@store');   




    Route::get('/new','ContactsController@create');

    Route::get('/state/{id}','CountryController@getStates');

    Route::get('/city/{id}','StateController@getCities');

    Route::get('/delete/{id}','ContactsController@delete');


    

  
    
}); 
