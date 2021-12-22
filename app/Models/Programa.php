<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $table = "programas";

    protected $fillable = [
        'pro_estado_programa',
        'pro_departamento',
        'pro_municipio',
        'pro_facultad',
        'pro_nombre',
        'pro_titulo',
        'pro_codigosnies',
        'pro_resolucion',
        'pro_fecha_ult',
        'pro_fecha_prox',
        'pro_nivel_formacion',
        'pro_programa_ciclos',
        'pro_metodologia',
        'pro_duraccion',
        'pro_periodo',
        'pro_creditos',
        'pro_asignaturas',
        'pro_norma',
        'pro_director_programa'
    ];

}
