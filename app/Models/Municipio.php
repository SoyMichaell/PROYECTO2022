<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = "municipios";

    protected $fillable = [
        'id',
        'mun_nombre',
        'mun_status',
        'mun_departamento'
    ];

}
