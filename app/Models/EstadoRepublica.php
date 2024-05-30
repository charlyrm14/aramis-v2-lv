<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoRepublica extends Model
{
    use HasFactory;

    protected $table = 'am_tc_estados';

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
}
