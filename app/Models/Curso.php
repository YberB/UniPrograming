<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos'; 

    protected $fillable = [
        'nombre',
        'codigo',
        'docente_id',
    ];

    public function docente()
    {
        return $this->belongsTo(User::class, 'docente_id');
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
    
}
