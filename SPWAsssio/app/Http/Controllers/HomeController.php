<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tip;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        if($request->user()->hasRole('user')){
            $tips = Tip::where('baja',0)->get();
            return view('intUsers.dashboard', compact('tips'));
        }elseif($request->user()->hasRole('admin')){
            return view('home');
        }
    }
}
