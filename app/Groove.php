<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groove extends Model
{
    protected $fillable = [
        'notafiscal','banda','marca','modelo','serial','datadanota','situacao'
    ];
}
