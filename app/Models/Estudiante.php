<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    protected $fillable = [
        'nombre',
        'email',
    ];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }
}
