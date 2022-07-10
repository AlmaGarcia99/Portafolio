<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilesController extends Controller
{
    public function ajustes()
    {
    	return view('intUsers.settings');
    }

    public function obtenerUser()
    {
    	$user = Auth::user();
    	return $user;
    }

    public function verificarPerfil()
    {
    	$user = Auth::user();
        $confirmation = $user->profile->nombre_usu == null ? true : false;
        $confirmation = $user->profile->apellidos_usu == null ? true : false;
        $confirmation = $user->profile->numero == null ? true : false;
        $confirmation = $user->profile->foto == null ? true : false;
        return $confirmation;
    }
}
