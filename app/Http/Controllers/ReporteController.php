<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index ()
    {
        return view('dashboard/reportes/index');
    }
}
