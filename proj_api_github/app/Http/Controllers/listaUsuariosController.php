<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\Models\User_pesquisado;

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


    public function store(Request $request){

        $dadoUsuario = Http::get("https://api.github.com/users/{$request->user}");

        $userPesquisado = new User_pesquisado;


        $userPesquisado->nameAdmin = (string)session('nome');
        $userPesquisado->usuarioPesquisado = trim((string)$request->input('user'));

        $request->validate([
            'user' => 'required|string|max:255'
        ]);

        $userPesquisado->save();

        return redirect()->route('listarusuarios', ['user' => $request->input('user')]);
    }



}
