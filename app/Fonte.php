<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fonte extends Model
{
    protected $fillable = [
        'banda','fabricante','modelo','serial'
    ];
}
