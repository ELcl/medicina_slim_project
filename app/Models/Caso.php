<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Relacion de pertenencia
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Caso extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'sospecha',
        'reincidencia',
        'transferencia',
    ];

    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Paciente::class);
    }
}
