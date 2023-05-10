<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
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
Route::get('/tareas/form', 'App\Http\Controllers\TareasController@form')->name('tareas.form');
Route::get('/tareas/create', 'App\Http\Controllers\TareasController@create')->name('tareas.create');
Route::get('/tareas/show', 'App\Http\Controllers\TareasController@show')->name('tareas.show');
Route::get('/tareas', [TareasController::class, 'index'])->name('tareas.index');

Route::resource('tarea','App\Http\Controllers\TareasController');