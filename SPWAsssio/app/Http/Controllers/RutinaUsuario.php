<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutinaUsuario extends Controller
{
    public function rutinas()
    {
    	return view('intUsers.rutinas');
    }

    public function rutina()
    {
    	return view('intUsers.rutina');
    }
}
