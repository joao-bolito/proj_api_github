<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrarController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\listarAdminsController;
use App\Http\Controllers\listaUsuariosController;


Route::get('', [registrarController::class, 'registrar'])->name('registrar');
Route::post('', [registrarController::class, 'store'])->name('cadastrarAdmin');

Route::get('/login', [loginController::class, 'login'])->name('login');

Route::get('/listarAdmins', [listarAdminsController::class, 'listarAdmins'])->name('listarAdmins');

Route::get('/usuariosApiGithub', [listaUsuariosController::class, 'listaUsuario'])->name('listarusuarios');
Route::post('/usuariosApiGithub', [listaUsuariosController::class, 'store'])->name('cadastrarPesquisaUser');



