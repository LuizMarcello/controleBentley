<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = [
        'nome','velocmaxdown','velocmaxup','equipamento','velocmindown','velocminup','valor','valormensal','cir','banda'
    ];
}
