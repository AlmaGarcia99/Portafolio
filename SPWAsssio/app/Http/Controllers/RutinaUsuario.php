<?php

namespace App\Http\Controllers;

use App\Rutina;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutinaUsuario extends Controller
{
    public function rutinas()
    {
    	return view('intUsers.rutinas');
    }

    public function rutina($slug)
    {
    	$rutina = Rutina::where('slug',$slug)->firstOrFail();
        return view('intUsers.rutina',compact('rutina'));
    }

    public function misRutinas()
    {
    	$user = Auth::user();
    	$rutinas = $user->rutinas;
    	return response()->json($rutinas);
    }
    
    public function evaluacion(Request $request)
    {
    	$user = Auth::user();
    	dd($request);
    }
}
