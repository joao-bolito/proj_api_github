<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class listaUsuariosController extends Controller
{
    public function listaUsuario(Request $request){

        $user = $request->input('user');

        if(empty($user)){
            return view('usuariosApiGithub')->with('error', 'Digite um usuário');
        }

        $response = Http::get("https://api.github.com/users/{$request->user}");


        return view('usuariosApiGithub', compact("response"));
    }



}
