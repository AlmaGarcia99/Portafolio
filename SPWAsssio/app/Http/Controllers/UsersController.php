<?php

namespace App\Http\Controllers;

use Alert;
use App\Enfermedad;
use App\Grupo;
use App\Perfil;
use App\Role;
use App\User;
use Cache;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str as Str;
use Redirect,Response;

class UsersController extends Controller
{
    /**
     * Display a datatable of the resource
     *
     * @return  list of resource
     */
    public function datatable()
    {
        $users = Perfil::Join('users','users.id','=','profiles.user_id')
            ->join('grupos_trabajo','grupos_trabajo.GRUPO_ID','=','users.grupo_id')
            ->join('enfermedades','enfermedades.id','=','users.enfermedad_id')
            ->select(array('users.name', 'profiles.nombre_usu', 'profiles.apellidos_usu','grupos_trabajo.GRUPO_NOMBRE', 'profiles.numero', 'users.email', 'profiles.sexo', 'enfermedades.nombre','users.slug','profiles.observaciones','profiles.tipo_membresia','profiles.periodo','users.expired_at','users.created_at','users.id','users.baja','profiles.rutina'))
            ->where('users.baja',0)
            ->get();
        return DataTables::of($users)
            ->editColumn('expired_at', function ($user) {
                return $user->expired_at ? with(new Carbon($user->expired_at))->format('d/m/Y') : '';
            })
            ->addColumn('edit','intAdmin.intUsers.botones.edit')
            ->addColumn('delete','intAdmin.intUsers.botones.delete')
            ->addColumn('show','intAdmin.intUsers.botones.show')
            ->addColumn('revisar','intAdmin.intUsers.botones.revisar')
            ->rawColumns(['edit','delete','show','revisar'])
            ->toJson();
    }

    /**
     * Display a datatable of the resource
     *
     * @return  list of resource
     */
    public function datatableBajas()
    {
        $users = Perfil::Join('users','users.id','=','profiles.user_id')
            ->join('grupos_trabajo','grupos_trabajo.GRUPO_ID','=','users.grupo_id')
            ->join('enfermedades','enfermedades.id','=','users.enfermedad_id')
            ->select(array('users.name', 'profiles.nombre_usu', 'profiles.apellidos_usu','grupos_trabajo.GRUPO_NOMBRE', 'profiles.numero', 'users.email', 'profiles.sexo', 'enfermedades.nombre','users.slug','profiles.observaciones','profiles.tipo_membresia','profiles.periodo','users.expired_at','users.created_at','users.id','users.baja'))
            ->where('users.baja',1)
            ->get();
        return DataTables::of($users)
            ->editColumn('expired_at', function ($user) {
                return $user->expired_at ? with(new Carbon($user->expired_at))->format('d/m/Y') : '';
            })
            ->addColumn('edit','intAdmin.intUsers.botones.edit')
            ->addColumn('recovery','intAdmin.intUsers.botones.recovery')
            ->addColumn('show','intAdmin.intUsers.botones.show')
            ->addColumn('revisar','intAdmin.intUsers.botones.revisar')
            ->rawColumns(['edit','recovery','show','revisar'])
            ->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noUsuarios = User::where('baja',0)->count();
        return view('intAdmin.intUsers.index', compact('noUsuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //Creacion de nickname dinamico
       $lastusername = User::select('name')->orderby('id','DESC')->first();
       $nombrebase = substr($lastusername,9,-4);
       $numerousuario = substr($lastusername,13,-2);
       $contador = $numerousuario+1;
       $newnickname = $nombrebase.$contador;
       //Creacion de nickname dinamico
       $grupos = Grupo::where('baja',0)->get();
       $enfermedades = Enfermedad::where('baja',0)->get();
       return view('intAdmin.intUsers.create',compact('grupos','enfermedades','newnickname'));
    }

    public function detalles(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();
        dd($user->profile);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name       = $request->nombre;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->confirm_password);
        $user->grupo_id   = $request->grupo;
        $user->enfermedad_id = $request->enf;
        $user->slug=Str::slug($user->name.time());
        $user->baja         = 0;
        //Manipular fechas con carbon para obtener fecha en que finaliza su membresia expired_at
        $dt = carbon::now()->format('m/d/Y');
        if($request->periodo == "15 Días"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addDays(15);
        }else if($request->periodo == "1 Mes"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(1);
        }else if($request->periodo == "Trimestral"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(3);
        }else if($request->periodo == "Semestral"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(6);
        }else if($request->periodo == "Anual"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(12);
        }
        $user->expired_at = $date;
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $perfil = new Perfil();
        $perfil->user_id = $user->id;
        $perfil->observaciones = $request->observaciones;
        $perfil->tipo_membresia = $request->membresia;
        $perfil->numero = $request->tel;
        $perfil->periodo = $request->periodo;
        $perfil->rutina = $request->rutina;
        $perfil->sexo = $request->sexo;
        $perfil->save();
        //dd($perfil);
        alert()->success('SPAsssio', 'Usuario registrado correctamente');
        return Redirect::to('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        return view('intAdmin.intUsers.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        $grupos = Grupo::where('baja',0)->get();
        $enfermedades = Enfermedad::where('baja',0)->get();
        return view('intAdmin.intUsers.edit', compact('user','grupos','enfermedades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();

        $user->name       = $request->nombre;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->pass);
        $user->grupo_id   = $request->grupo;
        $user->enfermedad_id = $request->enf;
        $user->slug=Str::slug($user->name.time());
        $user->baja         = 0;
        //Manipular fechas con carbon para obtener fecha en que finaliza su membresia expired_at
        $dt = carbon::now()->format('m/d/Y');
        if($request->periodo == "15 Días"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addDays(15);
        }else if($request->periodo == "1 Mes"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(1);
        }else if($request->periodo == "Trimestral"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(3);
        }else if($request->periodo == "Semestral"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(6);
        }else if($request->periodo == "Anual"){
            $date = Carbon::createFromFormat('m/d/Y', $dt)->addMonth(12);
        }
        $user->expired_at = $date;
        $user->save();

        $perfil = Perfil::where('user_id',$user->id)->firstOrFail();
        $perfil->observaciones = $request->observaciones;
        $perfil->tipo_membresia = $request->membresia;
        $perfil->numero = $request->tel;
        $perfil->periodo = $request->periodo;
        $perfil->rutina = $request->rutina;
        $perfil->sexo = $request->sexo;
        $perfil->save();

        alert()->success('SPAsssio', 'Usuario editado correctamente');
        return Redirect::to('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        $user->baja=1;
        $user->save();
        alert()->warning('SPAsssio', 'Usuario eliminado');
        return back();
    }

    public function delete($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        $user->baja=1;
        $user->save();
        alert()->warning('SPAsssio', 'Usuario eliminado');
        return true;
    }
    public function obtenerRutinasDeUsuario($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        $rutinas = $user->rutinas;
        return response()->json($rutinas);
    }

    public function mostrarObservaciones($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        $observaciones = $user->profile->observaciones;
        return response()->json($observaciones);
    }

    public function inactiveUsers()
    {
        $noUsuarios = User::where('baja',0)->count();
        return view('intAdmin.intUsers.inactive', compact('noUsuarios'));
    }

    public function recovery($slug)
    {
        $user = User::where('slug',$slug)->firstOrFail();
        $user->baja=0;
        $user->save();
        alert()->success('SPAsssio', 'Usuario reactivado');
        return true;
    }
}
