<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//salas
Route::get('/salas', [App\Http\Controllers\SalasController::class, 'index']);
Route::get('/salas/create', [App\Http\Controllers\SalasController::class, 'create']);
Route::get('/salas/{sala}/edit', [App\Http\Controllers\SalasController::class, 'edit']);
Route::post('/salas', [App\Http\Controllers\SalasController::class, 'store']);
Route::put('/salas/{sala}', [App\Http\Controllers\SalasController::class, 'update']);
Route::delete('/salas/{sala}', [App\Http\Controllers\SalasController::class, 'destroy']);
//Desarrolladores

// Route::resource('desarrolladores', 'App\Http\Controllers\DesarrolladorController');

Route::get('/desarrolladores', [App\Http\Controllers\DesarrolladorController::class, 'index']);
Route::get('/desarrolladores/create', [App\Http\Controllers\DesarrolladorController::class, 'create']);
Route::get('/desarrolladores/{desarrollador}/edit', [App\Http\Controllers\DesarrolladorController::class, 'edit']);
Route::post('/desarrolladores', [App\Http\Controllers\DesarrolladorController::class, 'store']);
Route::put('/desarrolladores/{desarrollador}', [App\Http\Controllers\DesarrolladorController::class, 'update']);
Route::delete('/desarrolladores/{desarrollador}', [App\Http\Controllers\DesarrolladorController::class, 'destroy']);


