<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index');
Route::get('apropos','AboutController@index');
Route::get('apprenants','SimploniensController@listApprenants');
Route::get('evenements','EvenementsController@listEvenements');
Route::get('alumnis','SimploniensController@listAlumnis');
Route::get('enregistrer','SimploniensController@index');
Route::get('contact','ContactController@index');
Route::post('ajouter-simplonien','SimploniensController@store');
Route::post('ajouter-evenement','EvenementsController@store');
Route::post('ajouter-actualite','ActualitesController@store');
Route::post('ajouter-projet','ProjetsController@store');