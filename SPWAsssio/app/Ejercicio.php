<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $table = 'ejercicios';
    protected $primaryKey = 'id_ejercicio';

    public function rutina()
    {
    	return $this->belongsToMany(Rutina::class,'rutinas');
    }
}
