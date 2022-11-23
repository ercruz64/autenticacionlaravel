<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\RegistrarUserController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::get('/', function () {
    return view('layouts/app');
});

Route::view('/registrar','auth.registrar')->name('registrar');
Route::post('registrar',[RegistrarUserController::class,'store']);

Route::view('/login','auth.login')->name('login');
Route::post('/login',[AuthenticatedSessionController::class,'store']);
Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

Route::view('/inicio','inicio.index')->name('inicio');
Route::view('/nosotros','nosotros.index')->name('nosotros');

Route::resource('about',AboutController::class);

