<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome','cnpj','rua','numero','bairro','cidade','estado','telefone','situacao'
    ];
}
