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


Route::get('hola', function () {
    return "hola";
});

Route::get('fotos',function(){
  return view('fotos');
})->name('foto');

Route::get('blog',function(){
  return view('blog');
})->name('noticias');

Route::get('nosotros/{nombre?}',function($nombre = null){

    $equipo = ['David','Juan','Jose'];
//  return view('nosotros',['equipo' => $equipo]);
    return view('nosotros',compact('equipo','nombre'));
})->name('nosotros');
