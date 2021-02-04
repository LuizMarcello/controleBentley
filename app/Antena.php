<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antena extends Model
{
    protected $fillable = [
        'notafiscal','banda','fabricante','modelo','diametro','qtde','situacao','datanota'
    ];
}
