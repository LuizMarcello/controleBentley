<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modem extends Model
{
    protected $fillable = [
        'notafiscal','banda','modelo','serial','fabricante','macaddress','situacao','datanota'
    ];
}
