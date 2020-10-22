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
        'lugNac',
        'fechaNac',
        'genero',
        'estado_civil',
        'direccion',
        'colonia',
        'cp',
        'ciudad',
        'telefono',
        'curp',
        'num_seguro',
        'tipo_sangre',
        'alergias',
        'medicamentos_alergicos',
        'complicaciones_medicas',
        'contacto1',
        'direccion_contac',
        'colonia1',
        'tel_contact',
        'contacto2',
        'direccion2',
        'colonia2',
        'tel_contact2',
        'empresa',
        'domicilio_empresa',
        'colonia_empresa',
        'ciudad_empresa',
        'puesto',
        'antiguedad',
        'nombre_jefe',
        'turno'
    ];
}
