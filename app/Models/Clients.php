<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
	'Dni_client',
	'Nom_cognoms',
	'Edat',
        'Telefon',
        'Adreca',
        'Ciutat',
        'Pais',
        'Email',
        'Numero_permis_conduccio',
        'Punts_permis_conduccio',
	'Tipus_targeta',
        'Numero_targeta'
    ];
}
