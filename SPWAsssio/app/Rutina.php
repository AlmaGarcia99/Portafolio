<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $table = 'rutinas';
    protected $primaryKey = 'id_rutina';

    public function user()
    {
        return $this->hasOneThrough(User::class, PivotUsersRutinas::class,
            'id_rutina',
            'id',
            'id_rutina',
            'id_user'
        );
    }

    public function ejercicios()
    {
    	return $this->belongsToMany(Ejercicio::class,'rutina_ejercicio','id_rutina','id_ejercicio');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'users_rutinas','id_rutina','id_user');
    }

    public function rutina_pivot()
    {
        return $this->belongsTo(PivotUsersRutinas::class,'id_rutina','id_rutina');
    }
}
