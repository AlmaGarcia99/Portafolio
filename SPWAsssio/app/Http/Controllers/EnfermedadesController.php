<?php

namespace App\Http\Controllers;

use App\Enfermedad;
use Illuminate\Support\Str as Str;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class EnfermedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function datatable()
    {
        $enfermedades=Enfermedad::where('baja','=',0);
        return DataTables::of($enfermedades)
                ->addColumn('edit','intAdmin.intEnfermedades.botones.edit')
                ->addColumn('delete','intAdmin.intEnfermedades.botones.delete')
                ->addColumn('show','intAdmin.intEnfermedades.botones.show')
                ->addColumn('observaciones','intAdmin.intEnfermedades.botones.observaciones')
                ->rawColumns(['edit','delete','show','observaciones'])
                ->toJson();
    }




    public function index()
    {
        $noEnfermedades = Enfermedad::where('baja','=',0)->count();
        return view('intAdmin.intEnfermedades.index',compact('noEnfermedades'));        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intEnfermedades.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $enfermedad = new Enfermedad();
        $enfermedad->nombre = $request->input('nombre');
        $enfermedad->status = $request->input('estatus');
        $enfermedad->slug=Str::slug($enfermedad->nombre."-".time());
        $enfermedad->observaciones = $request->observaciones;
        $enfermedad->baja = 0;
        $enfermedad->save();
        alert()->success('SPAsssio', 'Enfermedad registrada correctamente');
        return Redirect::to('/enfermedades');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
     {
        $enfermedad=Enfermedad::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intEnfermedades.show',compact('enfermedad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $enfermedad=Enfermedad::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intEnfermedades.edit',compact('enfermedad'));
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
        $enfermedad=Enfermedad::where('slug','=',$slug)->firstOrFail();
        $enfermedad->nombre = $request->input('nombre');
        $enfermedad->status = $request->input('estatus');
        $enfermedad->baja = 0;
        $enfermedad->observaciones = $request->observaciones;
        $enfermedad->save();
        alert()->success('SPAsssio', 'Enfermedad registrada correctamente');
        return Redirect::to('/enfermedades');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
   {
        $enfermedad=Enfermedad::where('slug','=',$slug)->firstOrFail();
        $enfermedad->baja=1;
        $enfermedad->save();
        alert()->warning('SPAsssio', 'Enfermedad eliminada');
        return Redirect::to('/enfermedades');
    }
}
