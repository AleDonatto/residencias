<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $table = 'curso';
    protected $primaryKey = 'idCurso';

    protected $fillable = [
        'nombreCurso',
        'descripcion',
        'codigoIns',
        'docente_id',
        'materia_id',
        'periodo_id'
    ];
}
