<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\EstadoRepublica;

class Asegurado extends Model
{
    use HasFactory;

    protected $table = 'am_tc_asegurado';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fi_numero_cliente',
        'fc_clave_asegurado',
        'fi_numero_asegurado',
        'fc_nombre_asegurado',
        'fc_email',
        'fc_rfc',
        'fc_sexo',
        'fi_fecha_nacimiento',
        'fi_estado_civil',
        'fc_direccion',
        'fc_complemento',
        'fc_colonia',
        'fc_numero',
        'fc_ciudad',
        'fi_estado',
        'fc_codigo_postal',
        'fc_profesion',
        'fc_codarea_telefono_casa',
        'fc_telefono_casa',
        'fc_ext_telefono_casa',
        'fc_codarea_telefono_comp',
        'fc_telefono_comp',
        'fc_ext_telefono_comp',
        'fc_codarea_tel_celular_fax',
        'fc_telefono_celular_fax',
        'fc_ext_telefono_celular_fax',
        'fi_fecha_inclusion',
        'asegurado_id',
        'fi_numero_producto'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'fc_usuario_creacion',
        'fd_fecha_creacion',
        'fc_usuario_modificacion',
        'fd_fecha_modificacion'
    ];

    public $timestamps = false;

    /**
     * The function `busquedaAsegurado` in PHP performs a search based on the type of search specified
     * in the input data.
     * 
     * @param data The `busquedaAsegurado` function is a static method that takes an array `` as a
     * parameter. The function then checks the value of the key "tipo_busqueda" in the `` array
     * using a switch statement.
     * 
     * @return The `busquedaAsegurado` function is returning the result of the
     * `busquedaPorNombreAsegurado` function when the `tipo_busqueda` is 'fc_nombre_asegurado'.
     */
    public static function busquedaAsegurado(string $query, string $tipo_busqueda)
    {
        switch ($tipo_busqueda) {

            case 'fc_nombre_asegurado':
                return self::busquedaPorNombreAsegurado($query);
            break;

            case 'fc_rfc':
                return self::busquedaPorRfcAsegurado($query);
            break;
            
            default:
            # code...
            break;
        }
    }

    /**
     * The function `busquedaPorNombreAsegurado` searches for insurance policy holders by name in a
     * database table and returns the results paginated.
     * 
     * @param fc_nombre_asegurado The `busquedaPorNombreAsegurado` function is a Laravel query that
     * searches for an insured person by their name in the `am_tc_asegurado` table. It selects specific
     * columns, applies a full-text search using `CONTAINS`, groups the results by `fc_cl
     * 
     * @return The function `busquedaPorNombreAsegurado` is returning a paginated list of records from
     * the 'am_tc_asegurado' table where the 'fc_nombre_asegurado' column matches the provided search
     * term ``. The returned fields include 'fc_clave_asegurado' as
     * 'clave_asegurado
     */
    public static function busquedaPorNombreAsegurado($fc_nombre_asegurado)
    {
        return DB::table('am_tc_asegurado')->select(
            'fc_clave_asegurado',
            'fc_nombre_asegurado',
            'fc_email',
            'fc_rfc',
            'fi_fecha_nacimiento'
        )->selectRaw('max(id) as id')->distinct('fc_clave_asegurado')->when( $fc_nombre_asegurado, function( $query ) use ( $fc_nombre_asegurado ){
            $query->whereRaw(
                'CONTAINS (fc_nombre_asegurado, \'"*'.$fc_nombre_asegurado.'*"\' )'
            );
        })->groupBy(
            'fc_clave_asegurado', 
            'fc_nombre_asegurado', 
            'fc_email', 
            'fc_rfc', 
            'fi_fecha_nacimiento'
        )->orderBy('fc_clave_asegurado', 'DESC')->get();
    }

    /**
     * This PHP function retrieves insurance policy information based on a partial RFC input.
     * 
     * @param fc_rfc The `busquedaPorRfcAsegurado` function is a PHP function that performs a database
     * query to retrieve information about an insured person based on their RFC (tax identification
     * number). The function selects specific columns from the `am_tc_asegurado` table, filters the
     * results based
     * 
     * @return The function `busquedaPorRfcAsegurado` is returning a collection of records from the
     * `am_tc_asegurado` table that match the provided RFC (tax identification number) prefix. The
     * returned fields include `fc_clave_asegurado`, `fc_nombre_asegurado`, `fc_email`, `fc_rfc`, and
     * `fi_fecha_n
     */
    public static function busquedaPorRfcAsegurado($fc_rfc)
    {
        return DB::table('am_tc_asegurado')->select(
            'fc_clave_asegurado',
            'fc_nombre_asegurado',
            'fc_email',
            'fc_rfc',
            'fi_fecha_nacimiento'
        )->selectRaw('max(id) as id')->distinct('fc_clave_asegurado')
        ->when( $fc_rfc, function( $query ) use ( $fc_rfc ) {
            $query->where('fc_rfc', 'LIKE', substr($fc_rfc, 0, 10) . '%');
        })->groupBy(
            'fc_clave_asegurado', 
            'fc_nombre_asegurado', 
            'fc_email', 
            'fc_rfc', 
            'fi_fecha_nacimiento'
        )->orderBy('fc_clave_asegurado', 'DESC')->get();
    }

    /**
     * The function obtains an insured individual by their ID.
     * 
     * @param asegurado_id The `asegurado_id` parameter is the unique identifier used to search for a
     * specific record in the database. In this case, the `obtieneAseguradoPorId` function is designed
     * to retrieve an "asegurado" (insured person) based on their
     * 
     * @return The function `obtieneAseguradoPorId` is returning the first record from the database
     * where the 'id' column matches the provided ``.
     */
    public static function obtieneAseguradoPorId($asegurado_id)
    {
        return static::with('estadoRepublica')->where('id', $asegurado_id)->first();
    }

    public function estadoRepublica()
    {
        return $this->belongsTo(EstadoRepublica::class, 'fi_estado', 'id');
    }
}
