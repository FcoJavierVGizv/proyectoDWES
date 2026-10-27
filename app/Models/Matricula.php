<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';

    protected $fillable = [
        'alumno_id',
        'modulo_id',
        'nota',
        'curso',
    ];

    /* public function alumno() {
        return $this->belongsTo('App\Models\Alumno');
    }
    */

    public function alumno(): BelongsTo
    {
        return $this->belongsTo(Alumno::class);
    }

    public function modulo(): BelongsTo
    {
        return $this->belongsTo(Modulo::class);
    }
}
