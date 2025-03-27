<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaUsuariosController extends Controller
{
    public function listaUsuario(){
        return view('usuariosApiGithub');
    }
}
