<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [AlumnoController::class, 'index']);
Route::get('/alumno/{id}', [AlumnoController::class, 'show']);
Route::get('/ingreso', [AlumnoController::class, 'create']);
Route::post('/alumno', [AlumnoController::class, 'store']);
Route::get('/alumnos/{id}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::resource('alumnos', AlumnoController::class);
Route::put('/alumno/{id}', [AlumnoController::class, 'update']);
Route::get('/contacto', [ContactoController::class, 'create'])->name('contacto.create');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');