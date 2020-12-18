<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome','rua','numero','bairro','cidade','estado','ativo'
    ];
}
