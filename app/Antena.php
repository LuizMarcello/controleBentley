<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antena extends Model
{
    protected $fillable = [
        'banda','fabricante','modelo','diametro'
    ];
}
