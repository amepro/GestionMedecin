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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/medecin/add', 'MedecinController@add')->name('addmedecin');

Route::get('/medecin/edit/{id}', 'MedecinController@edit')->name('editmedecin');

Route::post('/medecin/update', 'MedecinController@update')->name('updatemedecin');

Route::get('/medecin/delete/{id}', 'MedecinController@delete')->name('deletemedecin');

Route::get('/medecin/getAll', 'MedecinController@getAll')->name('getallmedecin');

Route::post('/medecin/persist', 'MedecinController@persist')->name('persistmedecin');


Route::get('/rendezvous/add', 'RendezvousController@add')->name('addrendezvous');

Route::get('/rendezvous/edit/{id}', 'RendezvousController@edit')->name('editrendezvous');

Route::get('/rendezvous/update', 'RendezvousController@update')->name('updaterendezvous');

Route::get('/rendezvous/delete/{id}', 'RendezvousController@delete')->name('deleterendezvous');

Route::get('/rendezvous/getAll', 'RendezvousController@getAll')->name('getallrendezvous');

Route::post('/rendezvous/persist', 'RendezvousController@persist')->name('persistrendezvous');
