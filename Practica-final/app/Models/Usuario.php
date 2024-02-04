<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'datos'; 

    protected $fillable = [
        'nick',
        'email',
        'nombre',
        'apellidos',
        'dni',
        'fecha_nacimiento',
        'contraña',
        'rol'
    ];
}
