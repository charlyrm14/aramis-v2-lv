<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'am_tc_productos';

    protected $hidden = [
        'fc_usuario_creacion',
        'fd_fecha_creacion',
        'fc_usuario_modificacion',
        'fd_fecha_modificacion'
    ];

    /**
     * The function `getProductoAseguradora` retrieves information about a product from a database
     * table and its related insurance company.
     * 
     * @param fi_numero_producto The `getProductoAseguradora` function retrieves information about a
     * product from the database based on the provided product ID (``). It selects
     * various fields from the `am_tc_productos` table and joins it with the `am_tc_aseguradora` table
     * to fetch
     * 
     * @return The function `getProductoAseguradora` is returning a single row of data from the
     * database table `am_tc_productos` joined with `am_tc_aseguradora`. The selected columns include
     * information about the product, such as description, insurer ID, currency ID, policy
     * nomenclature, insurer details, and other related fields. The data is filtered based on the `id`
     */
    public static function obtieneInformacionProductoAseguradora($fi_numero_producto)
    {
        return DB::table('am_tc_productos as a')
            ->select(
                'a.fc_descripcion_producto',
                'a.fi_aseguradora',
                'a.fi_id_moneda',
                'a.fc_nomenclatura_polizas',
                'b.fc_razon_social',
                'b.fc_calle',
                'b.fc_estado',
                'b.fc_codigo_postal',
                'fc_numero_exterior',
                'a.fi_item_poliza_aseguradora',
                'a.fc_descripcion_aseguradora',
                'a.fi_siniestros'
            )
            ->join('am_tc_aseguradora as b', 'a.fi_aseguradora', '=', 'b.id')
            ->where('a.id', $fi_numero_producto)
            ->orderBy('a.id','desc')
            ->first();
    }

    public static function obtieneProductosComercializables()
    {
        return static::where('fc_comercializable', 'SI')->get();
    }
}
