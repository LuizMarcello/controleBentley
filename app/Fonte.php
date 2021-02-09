<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonte extends Model
{
    protected $fillable = [
        'notafiscal','banda','fabricante','modelo','serial','qtde', 'voltagem','datanota'
    ];
}
