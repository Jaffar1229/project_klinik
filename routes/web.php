<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('patient', App\Http\Controllers\PatientController::class);
Route::resource('polis', App\Http\Controllers\PoliController::class);
