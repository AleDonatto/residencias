<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos_datos extends Model
{
    use HasFactory;

    protected $table = 'datos_alumnos';

    protected $fillable = [
        'alumno_id',
        'direccion',
        'colonia',
        'telefono',
        'cp',
        'contac_emerg'
    ];
}
