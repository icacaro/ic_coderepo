<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;

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
Route::get('/usuarios',[UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create',[UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios',[UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/usuarios/{id}',[UsuarioController::class, 'show'])->name('usuarios.show');

Route::get('/', function () {
    return view('welcome');
});

