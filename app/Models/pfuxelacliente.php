<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pfuxelacliente extends Model
{
    use HasFactory;
     protected $fillable = [
    'nome',
    'email',
    'contacto',
    'Data_requesicao',
    'local_partida',
    'destino_partida',
    'passageiros',
    'Data_estimativa_entrega',
    'horas_partida_viatura',
    'horas_entrega_viatura',
    'descricao',
];
}
