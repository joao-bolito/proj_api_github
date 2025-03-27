<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class listarAdminsController extends Controller
{
    public function listarAdmins(){

        $admins = Admin::all();


        return view('listarAdmins', ['admin' => $admins]);

    }
}
