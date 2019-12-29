<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    protected $fillable = [
    	'title', 'subtitle', 'text', 'section', 'image', 'order',
    ];
}
