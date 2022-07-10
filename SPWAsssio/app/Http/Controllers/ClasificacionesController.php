<?php

namespace App\Http\Controllers;


use App\Clasificacion;
use App\Grupo;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class ClasificacionesController extends Controller
{

public function datatable()
    {
       $grupos=Grupo::where('baja','=',0)->get();
        return DataTables::of($grupos)
                ->addColumn('edit','intAdmin.intClasificaciones.botones.edit')
                ->addColumn('delete','intAdmin.intClasificaciones.botones.delete')
                ->addColumn('show','intAdmin.intClasificaciones.botones.show')
                ->addColumn('observaciones','intAdmin.intClasificaciones.botones.observaciones')
                ->rawColumns(['edit','delete','show','observaciones'])
                ->toJson();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noClasificaciones = new Grupo();
        $noClasificaciones = Grupo::where('baja','=',0)->count();
        return view('intAdmin.intClasificaciones.index',compact('noClasificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intClasificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $clasificacion = new Grupo();
        $clasificacion->grupo_nombre = $request->input('nombre');
        $clasificacion->grupo_estatus = $request->input('estatus');
        $clasificacion->observaciones = $request->observaciones;
        $clasificacion->baja = 0;
        $clasificacion->save();
        alert()->success('SPAsssio', 'clasificacion registrada correctamente');
        return Redirect::to('/clasificaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($clasifica_id)
    {
        $clasificacion=Grupo::where('GRUPO_ID',$clasifica_id)->firstOrFail();
        return view('intAdmin.intClasificaciones.show',compact('clasificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($clasifica_id)
    {
        $clasificacion=Grupo::where('GRUPO_ID',$clasifica_id)->firstOrFail();
        return view('intAdmin.intClasificaciones.edit',compact('clasificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $clasifica_id)
    {
        $clasificacion=Grupo::where('GRUPO_ID',$clasifica_id)->firstOrFail();
        $clasificacion->GRUPO_NOMBRE = $request->input('nombre');
        $clasificacion->GRUPO_ESTATUS = $request->input('estatus');
        $clasificacion->observaciones = $request->observaciones;
        $clasificacion->baja = 0;
        $clasificacion->save();
        alert()->success('SPAsssio', 'Grupo de trabajo editado correctamente');
        return Redirect::to('/clasificaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($clasifica_id)
    {
        $clasificacion=Grupo::where('GRUPO_ID',$clasifica_id)->firstOrFail();
        $clasificacion->baja=1;
        $clasificacion->save();
        alert()->warning('SPAsssio', 'Clasificacion eliminada');
        return Redirect::to('/clasificaciones');
    }

    public function deleteGroup($clasifica_id)
    {
        $clasificacion=Grupo::where('GRUPO_ID',$clasifica_id)->firstOrFail();
        $clasificacion->baja=1;
        $clasificacion->save();
        alert()->warning('SPAsssio', 'Grupo eliminado');
        return true;
    }
}
