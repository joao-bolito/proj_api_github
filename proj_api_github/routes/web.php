<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrarController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\listarAdminsController;
use App\Http\Controllers\listaUsuariosController;

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

Route::get('', [registrarController::class, 'registrar'])->name('registrar');
Route::post('', [registrarController::class, 'store'])->name('cadastrarAdmin');

Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/listarAdmins', [listarAdminsController::class, 'listarAdmins'])->name('listarAdmins');

Route::get('/usuariosApiGithub/{user?}', [listaUsuariosController::class, 'listaUsuario'])->name('listarusuarios');


