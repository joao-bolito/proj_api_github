<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class registrarController extends Controller
{
    public function registrar(){
        return view('registrar');
    }


    public function store(Request $request){

        $admins = new Admin;

        $admins->nome = $request->nome;
        $admins->email = $request->email;
        $admins->senha = bcrypt($request->senha);

        $admins->save();

        session(['nome' => $admins->nome], ['id' => $admins->id]);
        return redirect('/usuariosApiGithub');
    }
}
