<?php

use App\Ph;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return View::make('pages.home');
});
Route::get('/home', function () {
  return View::make('pages.home');
});
Route::get('/about', function () {
  return View::make('pages.about');
});
Route::get('/desarrollo', function () {
  $phs = Ph::all();
  return view('pages.desarrollo')->withPhs($phs);
});
Route::get('/contact', function () {
  return View::make('pages.contact');
});
Route::get('/etapasdenegocio', function () {
  return View::make('pages.etapasdenegocio');
});
Route::get('/atencion', function () {
  return View::make('pages.atencion');
});
Route::get('/ubicacion', function () {
  return View::make('pages.ubicacion');
});
Route::get('/panama', function () {
  return View::make('pages.panama');
});
Route::get('/trom', function () {
  return View::make('pages.trom');
});
Route::get('/rical', function () {
  return View::make('pages.rical');
});
Route::get('/asociados', function () {
  return View::make('pages.asociados');
});

Route::get('ph/{id}/informe', function ($id) {
  $ph = Ph::find($id);
  return view('ph.informe')->withph($ph);
});

Route::get('ph/{id}/informe/etapas', function ($id) {
  $ph = Ph::find($id);
  return view('ph.etapa')->withph($ph);
});
Route::get('ph/{id}/informe/memoria', function ($id) {
  $ph = Ph::find($id);
  return view('ph.memoria')->withph($ph);
});
Route::get('ph/{id}/informe/estado', function ($id) {
  $ph = Ph::find($id);
  return view('ph.estado')->withph($ph);
});
Route::get('ph/{id}/informe/ventas', function ($id) {
  $ph = Ph::find($id);
  return view('ph.ventas')->withph($ph);
});

Route::post('/ph', 'PhController@upload');

Route::auth();
Route::get('/home', 'HomeController@index');

Route::resource('ph', 'PhController');
