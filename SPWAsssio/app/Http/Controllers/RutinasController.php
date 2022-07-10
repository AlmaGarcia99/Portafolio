<?php

namespace App\Http\Controllers;

use App\Rutina;
use App\User;
use App\Ejercicio;
use App\ClasificaE;
use App\PivotRutinaEjercicio;
use App\PivotUsersRutinas;
use App\Grupo;
use App\Dieta;
use App\AsignarDieta;
use Illuminate\Support\Str as Str;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class RutinasController extends Controller
{

    /**
     * Display a datatable of the resource
     *
     * @return  list of resource
     */
    public function datatable()
    {
        $rutinas=Rutina::where('baja','=',0);
        return DataTables::of($rutinas)
                ->addColumn('edit','intAdmin.intRutinas.botones.edit')
                ->addColumn('delete','intAdmin.intRutinas.botones.delete')
                ->addColumn('show','intAdmin.intRutinas.botones.show')
                ->rawColumns(['edit','delete','show'])
                ->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noRutinas = Rutina::where('baja','=',0)->count();
        return view('intAdmin.intRutinas.index',compact('noRutinas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('baja',0)->get();
        return view('intAdmin.intRutinas.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutina = new Rutina();
        if($request->hasFile('audio')){
            $file=$request->file('audio');
            $sonido=time().$file->getClientOriginalName();
            $file->move(public_path().'/audiorutinas/',$sonido);
            $rutina->audio=$sonido;
        }
        $rutina->name_rutina = $request->input('nombre');
        $rutina->instruction_rutina = $request->input('descripcion');
        $rutina->slug=Str::slug($rutina->name_rutina."-".time());
        $rutina->baja = 0;
        $rutina->save();
        alert()->success('SPAsssio', 'Rutina registrada correctamente');
        return view('intAdmin.intRutinas.exercises', compact('rutina'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $rutina=Rutina::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intRutinas.show',compact('rutina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $rutina=Rutina::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intRutinas.edit',compact('rutina'));
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
         $rutina=Rutina::where('slug','=', $slug)->firstOrFail();
         if($request->hasFile('audio')){
            $file_path = public_path() . "/audiorutinas/$rutina->audio";
            \File::delete($file_path);
            $file=$request->file('audio');
            $sonido=time().$file->getClientOriginalName();
            $file->move(public_path().'/audio/',$sonido);
            $rutina->audio=$sonido;
        }
        $rutina->name_rutina = $request->input('nombre');
        $rutina->instruction_rutina = $request->input('descripcion');
        $rutina->baja = 0;
        $rutina->slug=Str::slug($rutina->name_rutina."-".time());
        $rutina->save();
        alert()->success('SPAsssio', 'Rutina registrada correctamente');
        return Redirect::to('/routines');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $rutina=Rutina::where('slug','=', $slug)->firstOrFail();
        $rutina->baja=1;
        $rutina->save();
        alert()->warning('SPAsssio', 'Rutina eliminada');
        return Redirect::to('/routines');
    }

    public function tiposEjercicios()
    {
        $claisificaciones = ClasificaE::where('BAJA',0)->get();
        $tipos = json_encode($claisificaciones);
        return $tipos;
    }

    public function ejercicios($id)
    {
        $ejercicios = Ejercicio::where('CLASIFICA_ID',$id)->get();
        return response()->json($ejercicios);
    }

    public function obtenerEjercicio($id)
    {
        $ejercicio = Ejercicio::find($id);
        return response()->json($ejercicio);
    }

    public function idExacto($slug)
    {
        $rutina=Rutina::where('slug',$slug)->firstOrFail();
        return response()->json($rutina);
    }

    public function obtenerIdRutina()
    {
       $rutina=Rutina::where('BAJA',0)->orderBy('id_rutina','DESC')->take(1)->first();
       return response()->json($rutina);
    }

    public function insertExercises(Request $request)
    {
        $ejercicios = $request->objeto;
        //dd($ejercicios);
        foreach($ejercicios  as $key => $ejercicio){

            $ej=new PivotRutinaEjercicio();
            $ej->id_rutina    = $ejercicio['id_rutinaobj'];
            $ej->id_ejercicio = $ejercicio['id_exercise'];
            $ej->save();
        }
        alert()->success('SPAsssio', 'Ejercicios asignados a la rutina con éxito');
        return Redirect::to('/routines');
    }

    public function editExercises($id)
    {
        $rutina=Rutina::find($id);
        return view('intAdmin.intRutinas.edit-exercises',compact('rutina'));
    }
    public function getExercises($id)
    {
        $rutina=Rutina::find($id);
        $ejercicios = $rutina->ejercicios;
        return response()->json($ejercicios);
    }

    public function getRutina($id)
    {
        $rutina=Rutina::find($id);
        return response()->json($rutina);
    }

    public function editRoutine(Request $request, $id)
    {
        $ejerciciosNuevos = $request->objeto;
        $firstId = $pivot = PivotRutinaEjercicio::where('id_rutina', $id)->firstOrFail();
        $idAuto = $firstId->id;
        foreach ($ejerciciosNuevos as $key => $ejercicio) {
            $pivot = PivotRutinaEjercicio::find($idAuto);
            $pivot->id_ejercicio = $ejercicio['id_exercise'];
            $pivot->save();
            $idAuto++;
        }
        alert()->success('SPAsssio', 'Ejercicios asignados a la rutina con éxito');
        return Redirect::to('/routines');

    }

    public function assignRoutine()
    {
        $users = User::where('baja',0)->get();
        return view('intAdmin.intRutinas.asignar',compact('users'));
    }

    public function obtenerGrupos()
    {
        $grupos = Grupo::where('baja',0)->get();
        return response()->json($grupos);
    }

    public function obtenerUsuarios($id)
    {
        $users = User::where('grupo_id',$id)->where('baja',0)->get();
        return response()->json($users);
    }

    public function todosLosUsuarios()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function obtenerRutinas()
    {
        $rutinas = Rutina::all();
        return response()->json($rutinas);
    }

    public function obtenerDietas()
    {
        $DietasL = Dieta::all();
        return response()->json($DietasL);
    }

    public function asignarRutina(Request $request)
    {
        $datos = $request->datos;
        $pivot = new PivotUsersRutinas;
        $pivot->id_user = $datos['id_user_obj'];
        $pivot->id_rutina = $datos['id_rutina_obj'];
        $pivot->save();
        return 'Ok! revisa si se inserto en la tabla rompimiento';
    }

    public function asignarDieta(Request $request)
    {

        $datos = $request->datos;
        $pivot = new AsignarDieta();
        $pivot->user_id	 = $datos['id_user'];
        $pivot->dieta_id = $datos['id_dieta'];
        $pivot->save();
        return 'Ok! revisa si se inserto en la tabla rompimiento';
    }



    public function asignacionMasiva(Request $request)
    {
        $usuarios = $request->usuarios;
        $id_rutina = $request->idRutina;
        foreach ($usuarios as $key => $user) {
            $pivot = new PivotUsersRutinas();
            $pivot->id_user = $user['id'];
            $pivot->id_rutina = $id_rutina;
            $pivot->save();
        }
        return 'revisa tu desmadrito porfa rey.';

    }

    public function removerRutina(Request $request, $id_rutina)
    {
        $user = User::where('slug',$request->slug)->firstOrFail();
        $pivot = PivotUsersRutinas::where('id_user','=',$user->id)
                    ->where(function($query) use ($id_rutina){
                        $query->where('id_rutina','=',$id_rutina);
                    })->firstOrFail();
        $pivot->delete();
        return "Ok, revisa tu desmadrito, rey, tqm.";
    }

    public function generarNuevaRutina(Request $request)
    {
        $rutina = $request->rutinaBase;
        $r = Rutina::find($rutina['id_rutina']);
        $slug = $request->slug;
        $user= User::where('slug',$slug)->firstOrFail();
        $pivot = PivotUsersRutinas::where('id_user','=',$user->id)
                    ->where(function($query) use ($r){
                        $query->where('id_rutina','=',$r->id_rutina);
                    })->firstOrFail();
        //Inserción de datos...
        //1.- Rutina nueva generada a partir de otra.
        $newRutina = new Rutina();
        $newRutina->name_rutina = $request->nuevaRutina['nombre'];
        $newRutina->instruction_rutina = $request->nuevaRutina['instrucciones'];
        $newRutina->slug=Str::slug($newRutina->name_rutina."-".time());
        $newRutina->baja = 0;
        $newRutina->save();
        //2- Insertar los ejercicios con la rutina correspondiente
        /*Obtenemos los ejercicios*/
        $ejercicios = $request->ejercicios;
         foreach($ejercicios  as $key => $ejercicio){
            $ej=new PivotRutinaEjercicio();
            $ej->id_rutina    = $newRutina->id_rutina;
            $ej->id_ejercicio = $ejercicio['id_ejercicio'];
            $ej->save();
        }
        //3.- Actualizamos la tabla detalle users_rutinas
        $pivot->id_rutina = $newRutina->id_rutina;
        $pivot->save();
        return 'Ok! revisa tu desmadrito';
    }
}
