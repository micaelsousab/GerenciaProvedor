<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'telefone',
        'celular',
        'dia_pagamento',
        'endereco_id',
        'plano_id'
    ];
}
