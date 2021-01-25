<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tria extends Model
{
    protected $fillable = [
        'notafiscal','banda','fabricante','serial','qtde','situacao'
    ];
}
