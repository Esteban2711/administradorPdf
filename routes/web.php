<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
})->name('login');


Route::post('/crear', [PdfController::class, 'store'])
    ->name('crear');

Route::get('/administrar', [PdfController::class, 'index'])
    ->name('administrar');

Route::get('/ver/{id}', [PdfController::class, 'show'])
    ->name('ver');

Route::get('/editar/{id}', [PdfController::class, 'edit'])
    ->name('editar');

Route::delete('/eliminar/{id}', [PdfController::class, 'destroy'])
    ->name('eliminar');

Route::put('/actualizar/{id}', [PdfController::class, 'update'])
    ->name('actualizar');

Route::post('iniciar-sesion', [LoginController::class, 'login'])
->name('loginSubmit');