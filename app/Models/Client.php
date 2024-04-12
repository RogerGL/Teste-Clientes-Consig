<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome', 'email', 'cpf', 'data_de_nascimento',
        'rua', 'numero_da_residencia', 'cep', 'cidade', 'estado', 'ativo'
    ];
}
