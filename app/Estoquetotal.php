<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estoquetotal extends Model
{
    protected $fillable = [
        'nome','banda','antenas','trias','modens','fontes','cabos','lnbs','ilnbs'
    ];
}
