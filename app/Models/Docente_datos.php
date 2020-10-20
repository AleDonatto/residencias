<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente_datos extends Model
{
    use HasFactory;

    protected $table = 'datos_docente';

    protected $fillable = [
        'docente_id',
        'direccion',
        'colonia',
        'ciudad',
        'telefono',
        'cp',
        'curp',
        'num_seguro',
        'tipo_sangre',
        'alergias',
        'medicamentos_alergicos',
        'complicaciones_medicas',
        'contac_emerg',
        'tel_contact',
        'tel2_contact',
        'parentesco'
    ];
}
