<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lnb extends Model
{
    protected $fillable = [
        'notafiscal','banda','serial','modelo','fabricante','situacao','qtde'
    ];
}
