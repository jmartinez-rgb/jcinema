<?php

namespace Jcinema;

use Illuminate\Database\Eloquent\Model;

class Cartelera extends Model
{
    public function pelicula(){
    	return $this->belongsTo(Pelicula::class); // Pertenece a una pelicula
    }
    public function cine(){
    	return $this->belongsTo(Cine::class);
    }
}
