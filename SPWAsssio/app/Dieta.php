<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    protected $table = 'dietas';
    protected $primaryKey = 'id_dieta';
    public function usuarios(){
        return $this->belongsToMany(Rutina::class,'user_dietas','dieta_id', 'user_id');
    }
    //
}

