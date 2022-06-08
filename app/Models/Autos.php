<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autos extends Model
{
    use HasFactory;
    protected $fillable = [
	'Matricula_auto',
	'Numero_bastidor',
	'Marca',
        'Model',
        'Color',
        'Nombre_places',
        'Nombre_portes',
        'Grandaria_maleter',
        'Tipus_combustible'
    ];
}
