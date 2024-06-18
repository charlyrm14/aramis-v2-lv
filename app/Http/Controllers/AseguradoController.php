<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asegurado;
use App\Services\GeneralService;
use App\Services\AseguradoService;
use App\Models\AseguradoPoliza;
use App\Models\Producto;

class AseguradoController extends Controller
{
    /**
     * The function "busqueda" in PHP retrieves and formats insurance data for display on a dashboard.
     * 
     * @param Request request The `Request ` parameter in the `busqueda` function is an
     * instance of the `Illuminate\Http\Request` class in Laravel. It represents the HTTP request that
     * is being made to the application and contains information such as form input, headers, and more.
     * 
     * @return The `busqueda` function is returning a view called `dashboard/asegurados/index` with a
     * variable `asegurados` that contains the results of the search for insured individuals based on
     * the request parameters. The function first retrieves the insured individuals using the
     * `busquedaAsegurado` method of the `Asegurado` model, then it iterates over each insured
     */
    public function busqueda(Request $request)
    {
        if(is_null($request->get('query')) || is_null($request->get('tipo_busqueda'))) abort(404);

        $asegurados = Asegurado::busquedaAsegurado($request->get('query'), $request->get('tipo_busqueda'));
        
        $asegurados->each(function($asegurado){
            $asegurado->fi_fecha_nacimiento = GeneralService::formatoFecha($asegurado->fi_fecha_nacimiento);
        });

        return view('dashboard/asegurados/index', [
            'asegurados' => $asegurados->unique('fc_rfc')
        ]);
    }

    /**
     * The function retrieves and displays products associated with a specific insured individual in a
     * PHP application.
     * 
     * @param int asegurado_id The `productosPorAsegurado` function takes an integer parameter
     * ``, which represents the ID of an insured person. The function retrieves the
     * insured person's information using the `obtieneAseguradoPorId` method from the `Asegurado`
     * 
     * @return A view named 'dashboard/asegurados/productos' is being returned with the data of the
     * asegurado obtained by the asegurado_id provided as a parameter. The asegurado data is passed to
     * the view under the key 'asegurado'.
     */
    public function productosPorAsegurado(int $asegurado_id)
    {
        $asegurado = Asegurado::obtieneAseguradoPorId($asegurado_id);

        if (!$asegurado) abort(404);

        $asegurado->fc_nombre_asegurado = AseguradoService::remueveGuiones($asegurado->fc_nombre_asegurado);

        $productos = AseguradoPoliza::obtieneInformacionAseguradoPoliza(
            $asegurado->fc_clave_asegurado, 
            $asegurado->fi_numero_cliente, 
            $asegurado->fc_rfc
        );

        if ($productos->isEmpty()) abort(404);

        $asegurado->fi_fecha_nacimiento = GeneralService::formatoFecha($asegurado->fi_fecha_nacimiento);

        foreach ($productos as $key => $producto_asegurado) {

            $info_producto = Producto::obtieneInformacionProductoAseguradora($asegurado->fi_numero_producto);
            $producto_asegurado->fc_descripcion_producto = !is_null($info_producto) ? trim($info_producto->fc_descripcion_producto) : NULL;
        }

        return view('dashboard/asegurados/productos', [
            'asegurado' => $asegurado,
            'productos' => $productos
        ]);
    }

    /**
     * The function `retencionProducto` retrieves information about insured persons for a given client,
     * product, and policy number and then displays it in a view for retention purposes.
     * 
     * @param int fi_numero_cliente The parameter `fi_numero_cliente` appears to represent the client
     * number in the function `retencionProducto`. It is expected to be an integer type. This parameter
     * likely identifies a specific client for whom information is being retrieved or processed within
     * the function.
     * @param int fi_numero_producto The parameter `fi_numero_producto` appears to represent the
     * product number. It is likely used to identify a specific product within the system.
     * @param string fc_numero_poliza The parameter `fc_numero_poliza` is a string type variable that
     * represents the policy number associated with a specific insurance policy. It is used as a unique
     * identifier for the policy within the system.
     * 
     * @return The function `retencionProducto` is returning a view called
     * 'dashboard/asegurados/retencion' with the data of the variable ``, which is obtained
     * by calling the static method `obtieneInformacionAsegurados` of the class `AseguradoPoliza` with
     * the parameters ``, ``, and `$
     */
    public function retencionProducto(int $fi_numero_cliente, int $fi_numero_producto, string $fc_numero_poliza)
    {
        $asegurados = AseguradoPoliza::obtieneInformacionAsegurados($fi_numero_cliente, $fi_numero_producto, $fc_numero_poliza);

        if ($asegurados->isEmpty()) abort(404);

        foreach ($asegurados as $key => $asegurado) {
            $asegurado->fi_tipo_asegurado_label = AseguradoService::tipoAsegurado($asegurado->fi_tipo_asegurado);
            $asegurado->fi_fecha_nacimiento = GeneralService::formatoFecha($asegurado->fi_fecha_nacimiento);
        }

        return view('dashboard/asegurados/retencion', [
            'fi_numero_cliente' => $fi_numero_cliente,
            'fi_numero_producto' => $fi_numero_producto,
            'fc_numero_poliza' => $fc_numero_poliza,
            'asegurados' => $asegurados
        ]);
    }

    /**
     * The function `endosoPoliza` retrieves information about insured persons for a given client,
     * product, and policy number and then displays it in a view for retention purposes.
     * 
     * @param int fi_numero_cliente The parameter `fi_numero_cliente` appears to represent the client
     * number in the function `endosoPoliza`. It is expected to be an integer type. This parameter
     * likely identifies a specific client for whom information is being retrieved or processed within
     * the function.
     * @param int fi_numero_producto The parameter `fi_numero_producto` appears to represent the
     * product number. It is likely used to identify a specific product within the system.
     * @param string fc_numero_poliza The parameter `fc_numero_poliza` is a string type variable that
     * represents the policy number associated with a specific insurance policy. It is used as a unique
     * identifier for the policy within the system.
     * 
     * @return The function `endosoPoliza` is returning a view called
     * 'dashboard/asegurados/endoso' with the data of the variable ``, which is obtained
     * by calling the static method `obtieneInformacionAsegurados` of the class `AseguradoPoliza` with
     * the parameters ``, ``, and `$
     */
    public function endosoPoliza(int $fi_numero_cliente, int $fi_numero_producto, string $fc_numero_poliza)
    {
        return view('dashboard/asegurados/endoso', [
            'fi_numero_cliente' => $fi_numero_cliente,
            'fi_numero_producto' => $fi_numero_producto,
            'fc_numero_poliza' => $fc_numero_poliza
        ]);
    }

    /**
     * The function `cancelacionPoliza` retrieves information about insured persons for a given client,
     * product, and policy number and then displays it in a view for retention purposes.
     * 
     * @param int fi_numero_cliente The parameter `fi_numero_cliente` appears to represent the client
     * number in the function `cancelacionPoliza`. It is expected to be an integer type. This parameter
     * likely identifies a specific client for whom information is being retrieved or processed within
     * the function.
     * @param int fi_numero_producto The parameter `fi_numero_producto` appears to represent the
     * product number. It is likely used to identify a specific product within the system.
     * @param string fc_numero_poliza The parameter `fc_numero_poliza` is a string type variable that
     * represents the policy number associated with a specific insurance policy. It is used as a unique
     * identifier for the policy within the system.
     * 
     * @return The function `cancelacionPoliza` is returning a view called
     * 'dashboard/asegurados/endoso' with the data of the variable ``, which is obtained
     * by calling the static method `obtieneInformacionAsegurados` of the class `AseguradoPoliza` with
     * the parameters ``, ``, and `$
     */
    public function cancelacionPoliza(int $fi_numero_cliente, int $fi_numero_producto, string $fc_numero_poliza)
    {
        return view('dashboard/asegurados/cancelar-poliza', [
            'fi_numero_cliente' => $fi_numero_cliente,
            'fi_numero_producto' => $fi_numero_producto,
            'fc_numero_poliza' => $fc_numero_poliza
        ]);
    }
}
