<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = [
        'nome','banda','cir','velocmaxdown','velocmaxup','equipamento',
        'velocmindown','velocminup','valor','valormensal','valordecusto'
    ];
}
