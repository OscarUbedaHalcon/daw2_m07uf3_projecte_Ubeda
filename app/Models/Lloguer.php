<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloguer extends Model
{
    use HasFactory;
    protected $fillable = [
	'Dni_client',
	'Matricula_auto',
	'Data_prestec',
        'Data_devolucio',
        'Lloc_devolucio',
        'Preu_dia',
        'Prestec_retorn_diposit_ple',
        'Tipus_assegunanca'
    ];
}
