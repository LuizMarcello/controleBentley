<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'cnpj', 'bairro', 'cidade', 'estado', 'telefone', 'situacao', 'email', 'dataNascimento', 'endereco',
        'cep', 'dataCadastro', 'celular', 'ie', 'ufie', 'instalador', 'plano', 'migracao',
        'observacao','designacao','distribuidor'
    ];
}
