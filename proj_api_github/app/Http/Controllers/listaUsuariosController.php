<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class listaUsuariosController extends Controller
{
    public function listaUsuario(Request $request){

        $response = Http::get("https://api.github.com/users/{$request->user}");

        // return $response;

        return view('usuariosApiGithub', compact("response"));
    }



}
