<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $fillable = [
        'nome','rua','numero','cidade','estado','telefone','ativo'
    ];
}
