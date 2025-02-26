<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('prueba', function () {

    return 'has ingresado a la ruta';

})->middleware(['auth:sanctum','age']);

Route::get('no-autorizado', function () {
    return 'este usuario no es valido';
});
