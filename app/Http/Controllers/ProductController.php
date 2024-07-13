<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $productos = Producto::obtieneProductosComercializables();

        return view('dashboard/productos/index', [
            'productos' => $productos
        ]);
    }
}
