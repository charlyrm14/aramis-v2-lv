<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class AseguradoPoliza extends Model
{
    use HasFactory;

    protected $table = 'am_tt_asegurado_poliza';

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
     * The function `obtieneInformacionAseguradoPoliza` retrieves insurance policy information for a
     * specified insured individual based on their details.
     * 
     * @param fc_clave_asegurado The function `obtieneInformacionAseguradoPoliza` is a PHP function
     * that retrieves information about an insured policyholder based on the provided parameters. The
     * parameters are used to filter the results from the database query. Here's a breakdown of the
     * parameters used in the function:
     * @param fi_numero_cliente The parameter `fi_numero_cliente` is used to identify the client number
     * associated with the insurance policy. It is a unique identifier for the client within the
     * insurance system.
     * @param fc_rfc The `fc_rfc` parameter in the `obtieneInformacionAseguradoPoliza` function is used
     * to filter the results based on the RFC (tax identification number) of the insured person. The
     * function retrieves information about an insured policyholder based on the provided parameters
     * `fc_cl
     * 
     * @return The function `obtieneInformacionAseguradoPoliza` is returning information about an
     * insured policyholder based on the provided parameters ``,
     * ``, and ``. The function retrieves data from the database tables
     * `am_tt_asegurado_poliza`, `am_tt_poliza`, `am_tc_aseg
     */
    public static function obtieneInformacionAseguradoPoliza($fc_clave_asegurado, $fi_numero_cliente, $fc_rfc)
    {
        return DB::table('am_tt_asegurado_poliza AS atap')
            ->select(
                'atp.fi_numero_cliente',
                'atp.fi_numero_producto',
                'atp.fc_numero_poliza',
                'atp.fc_estatus_poliza',
                'atp.fi_fecha_cancelacion',
                'atmc.fc_descripcion_motivo_cancelacion',
                'atap.fc_clave_asegurado',
                'atap.fi_tipo_asegurado',
                'atap.fi_fecha_inicio_vigencia',
                'ata.fi_fecha_nacimiento',
                'atap.fi_numero_plan_campania',
                'atap.fi_numero_campania',
                'atap.fi_numero_asegurado',
                'atp.fc_numero_certificado',
                'atp.fi_fecha_fin_vigencia',
                'atp.fn_prima_total',
                'atp.fi_fecha_inicio_vigencia as inicio_vigencia_pol',
                'atp.fd_fecha_creacion AS fecha_creacion'
            )
            ->distinct()
            ->join('am_tt_poliza AS atp', function($join) {
                $join->on('atp.fc_numero_poliza','=','atap.fc_numero_poliza')
                ->on('atp.fi_numero_cliente','=','atap.fi_numero_cliente')
                ->on('atp.fi_numero_producto','=','atap.fi_numero_producto')
                ->lock('WITH(NOLOCK)');
            })->join('am_tc_asegurado AS ata', function($join) {
                $join->on('atap.fc_clave_asegurado','=','ata.fc_clave_asegurado')
                ->on('atap.fi_numero_cliente','=','ata.fi_numero_cliente')
                ->on('atap.fi_numero_asegurado','=','ata.fi_numero_asegurado')
                ->lock('WITH(NOLOCK)');
            })->leftJoin('am_tc_motivos_cancelacion AS atmc', 'atmc.id', '=', 'atp.fi_numero_motivo_cancelacion')
            ->where([
                ['atap.fc_clave_asegurado', $fc_clave_asegurado],
                ['atap.fi_numero_cliente', $fi_numero_cliente],
                ['ata.fc_rfc', $fc_rfc],
            ])->whereIn('atap.fi_tipo_asegurado', ['1', '10', '11', '12'])
            ->orderBy('atap.fc_clave_asegurado')
            ->get();
    }

    /**
     * The function obtains information related to a policy key for a specific client and product in a
     * PHP application using Laravel's Eloquent ORM.
     * 
     * @param fi_numero_cliente The `fi_numero_cliente` parameter is used to filter the results based
     * on the client number. It is a numeric value that helps identify a specific client in the
     * database. When calling the `obtieneInformacionPorLlavePoliza` function, you need to provide the
     * client number as
     * @param fi_numero_producto The parameter `fi_numero_producto` in the provided function
     * `obtieneInformacionPorLlavePoliza` appears to represent the client's product number. This
     * parameter is used to filter the query results based on the client's specific product within the
     * insurance policy information.
     * @param fc_numero_poliza The function `obtieneInformacionPorLlavePoliza` retrieves information
     * based on the provided parameters. In this case, `fc_numero_poliza` is a parameter that
     * represents the policy number. The function fetches data related to the insurance policy with the
     * specified policy number.
     * 
     * @return The function `obtieneInformacionPorLlavePoliza` is returning information related to an
     * insurance policy based on the provided client number, product number, and policy number. The
     * returned data includes details such as the insured person's ID, name, email, RFC, gender, date
     * of birth, address, city, state, postal code, and additional address information. It also
     * includes the
     */
    public static function obtieneInformacionAsegurados($fi_numero_cliente, $fi_numero_producto, $fc_numero_poliza)
    {
        return DB::table('am_tt_asegurado_poliza as atap')
        ->select(
            'ase.id AS am_tc_asegurado_id',
            'ase.fc_nombre_asegurado',
            'ase.fc_clave_asegurado',
            'ase.fc_email',
            'ase.fc_rfc',
            'ase.fc_sexo AS genero',
            'ase.fi_fecha_nacimiento',
            'ase.fc_direccion',
            'ase.fc_colonia',
            'ase.fc_numero',
            'ase.fc_ciudad',
            'ase.fi_estado',
            'ase.fc_codigo_postal',
            'ase.fc_complemento',
            'atap.fi_numero_cliente AS no_cliente',
            'atap.fi_numero_producto AS producto_actual_id',
            'atap.fc_numero_poliza AS no_poliza_anterior',
            'atap.fi_tipo_asegurado',
            'ase.fi_numero_asegurado',
            'atap.fi_numero_plan_campania AS plan_actual_id'
        )->join('am_tc_asegurado AS ase', function (JoinClause $query) {
            $query->on('ase.id', '=', 'atap.fi_id_asegurado');
        })->where([
            ['atap.fi_numero_cliente', $fi_numero_cliente],
            ['atap.fi_numero_producto', $fi_numero_producto],
            ['atap.fc_numero_poliza', $fc_numero_poliza],
        ])->get();
    }
}
