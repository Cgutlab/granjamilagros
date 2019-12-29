<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
    	'title', 'order',
    ];

    public function galeria() {
        return $this->hasMany('App\Galeria', 'id_category');
    }
}
