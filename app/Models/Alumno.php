<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'nombre_alumno',
        'curso',
        'nota_1_alumno',
        'nota_2_alumno',
        'promedio_alumno',
        'condicion_alumno',
        'fecha_reg',
    ];

    // Establecer automáticamente el promedio y la condición cuando se asignan nota_1 o nota_2
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->promedio_alumno = ($model->nota_1_alumno + $model->nota_2_alumno) / 2;
            $model->condicion_alumno = $model->promedio_alumno > 11 ? 'Aprobado' : 'Desaprobado';
        });
    }
}
