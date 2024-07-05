<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisoUsuarioController extends Controller
{
    public function index()
    {
        return view('dashboard/permisos/index');
    }

    public function perfil($usuario_id)
    {
        return view('dashboard/permisos/perfil');
    }
}
