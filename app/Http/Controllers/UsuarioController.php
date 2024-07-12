<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('dashboard/usuarios/index');
    }

    public function perfil($usuario_id)
    {
        return view('dashboard/usuarios/perfil');
    }

    public function misLlamadas($usuario_id)
    {
        return view('dashboard/usuarios/mis-llamadas');
    }
}
