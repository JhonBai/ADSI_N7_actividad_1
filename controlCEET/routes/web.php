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

Route::get('/', function(){
    return view ('home');
})->name('Home');

Route::get('colombia', function(){
    return view ('Sedes.colombia');
})->name('colombia');

Route::get('restrepo', function(){
    return view ('Sedes.restrepo');
})->name('restrepo');

Route::get('ricaurte', function(){
    return view ('Sedes.ricaurte');
})->name('ricaurte');

Route::get('alamos', function(){
    return view ('Sedes.alamos');
})->name('alamos');

Route::get('carrera', function(){
    return view ('Sedes.carrera');
})->name('carrera');

Route::get('registrar', function(){
    return view ('registrar');
})->name('registrar');