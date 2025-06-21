<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "cursos";
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class);
    }
}
