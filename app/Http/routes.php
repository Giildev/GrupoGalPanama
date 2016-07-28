<?php

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
  return View::make('pages.desarrollo');
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
