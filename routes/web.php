<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AseguradoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard/home/index');
})->name('home');

Route::get('/login', function () {
    return view('login/index');
})->name('login');

Route::prefix('asegurados')->controller(AseguradoController::class)->group(function() {
    Route::get('/busqueda', 'busqueda')->name('asegurados.busqueda');
    Route::get('/{asegurado_id}/productos', 'productosPorAsegurado')->name('asegurados.productos');
    Route::get('/retencion/{fi_numero_cliente}/{fi_numero_producto}/{fc_numero_poliza}', 'retencionProducto')->name('asegurados.retencion');
    Route::get('/endoso/{fi_numero_cliente}/{fi_numero_producto}/{fc_numero_poliza}', 'endosoPoliza')->name('asegurados.endoso');
    Route::get('/cancelacion/{fi_numero_cliente}/{fi_numero_producto}/{fc_numero_poliza}', 'cancelacionPoliza')->name('asegurados.cancelacion');
});