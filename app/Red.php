<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    protected $table = 'redes';

    protected $fillable = [
    	'name', 'route', 'icon', 'order', 'section',
    ];
}
