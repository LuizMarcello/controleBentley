<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    protected $fillable = [
        'nome','rua','numero','bairro','cidade','estado'
    ];
}
