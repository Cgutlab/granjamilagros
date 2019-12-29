<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
    	'image', 'order', 'id_category',
    ];

    public function categoria() {
        return $this->belongsTo('App\Categoria','id_category');
    }
}
