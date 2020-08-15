<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'cep',
        'cidade',
        'bairro',
        'rua',
        'numero'
    ];
}
