<?php

namespace App\Http\Controllers;

use App\Mail\FormularioTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function enviarMail(Request $request)
    {
    	$datos = $request;
    	Mail::to($request->correo)->send(new FormularioTest($datos));
    	return view('welcome');
    }
}
