<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/alumnos-grado1s/pdf', [\App\Http\Controllers\AlumnosGrado1Controller::class,'pdf'])->name('Reportes1.pdf');
Route::get('/alumnos-grado2s/pdf', [\App\Http\Controllers\AlumnosGrado2Controller::class,'pdf'])->name('Reportes2.pdf');
Route::get('/alumnos-grado3s/pdf', [\App\Http\Controllers\AlumnosGrado3Controller::class,'pdf'])->name('Reportes3.pdf');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/alumnos-grado1s', App\Http\Controllers\AlumnosGrado1Controller::class);

Route::resource('/alumnos-grado2s', App\Http\Controllers\AlumnosGrado2Controller::class);
Route::resource('/alumnos-grado3s', App\Http\Controllers\AlumnosGrado3Controller::class);

//Route::resource('/tipos-aprendizaje1s', App\Http\Controllers\TiposAprendizaje1Controller::class);
Route::resource('/tipos-aprendizaje1s', App\Http\Controllers\TiposAprendizaje1Controller::class);
Route::resource('/tipos-aprendizaje3s', App\Http\Controllers\TiposAprendizaje3Controller::class);
Route::resource('/tipos-aprendizaje2s', App\Http\Controllers\TiposAprendizaje2Controller::class);


Route::resource('/maestros', App\Http\Controllers\MaestroController::class);

    
