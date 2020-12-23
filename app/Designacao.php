<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designacao extends Model
{
    protected $fillable = [
        'modeloModem','serialModem','bandaModem','modeloNlb','serialNlb','modeloAntena'
    ];
}
