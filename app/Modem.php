<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modem extends Model
{
    protected $fillable = [
        'banda','marca','modelo','serial'
    ];
}
