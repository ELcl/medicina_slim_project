<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Relacion de pertenencia
use Illuminate\Database\Eloquent\Relations\HasOne;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
        'procedencia',
        'residencia',
        'ocupacion',
        'fuente_informacion',
        'grado_confiabilidad',
        'forma_llegada',
    ];

    public function caso(): HasOne
    {
        return $this->hasOne(Caso::class);
    }
}
