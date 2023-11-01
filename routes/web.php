<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocenteController; // Asegúrate de importar el controlador

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docentes', [DocenteController::class, 'listarDocentes'])->name('docentes'); // Ruta para listar docentes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::group(['middleware' => 'auth'], function () {
    Route::put('/profile/update', 'ProfileController@update')->name('profile.update');
    Route::delete('/profile/delete', 'ProfileController@delete')->name('profile.delete');


    Route::post('/asistencias/registrar', 'AsistenciaController@registrarAsistencia');
});

require __DIR__.'/auth.php';
