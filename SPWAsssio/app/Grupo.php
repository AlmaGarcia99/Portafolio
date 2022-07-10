<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = 'grupos_trabajo';
    protected $primaryKey = 'GRUPO_ID';

    public function users()
    {
    	return $this->hasMany(User::class,'grupo_id','id_grupo');
    }
}
