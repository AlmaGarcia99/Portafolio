<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str as Str;

use App\Enfermedad;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class EnfermedadesController extends Controller
{
 /**
     * Display a datatable of the resource
     *
     * @return  list of resource
     */
public function datatable()
    {
        $enfermedad = new Enfermedades();
       $enfermedades=Enfermedad::where('baja','=',0);
        return DataTables::of($enfermedades)
                ->addColumn('edit','intAdmin.intEnfermedades.botones.edit')
                ->addColumn('delete','intAdmin.intEnfermedades.botones.delete')
                ->addColumn('show','intAdmin.intEnfermedades.botones.show')
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
         $noEnfermedades = new Enfermedad();
         $noEnfermedades = Enfermedad::where('baja','=',0)->count();
        return view('intAdmin.intEnfermedades.index',compact('noEnfermedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intEnfermedades.create');
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
        $enfermedad->enferme_nombre = $request->input('enferme_nombre'); 
        $enfermedad->enferme_estatus = $request->input('enferme_estatus');
        $enfermedad->baja = 0;
        $enfermedad->save();
        alert()->success('SPAsssio', 'enfermedad registrada correctamente');
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
        $enfermedad=Enfermedad::where('slug','=', $slug)->firstOrFail();
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
          $enfermedad=Enfermedad::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intEnfermedades.edit',compact('enfermedad'));     
    }

    /**
     *  Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
         
             $enfermedad = new Enfermedad();
         
         $enfermedad=Enfermedad::where('slug','=',$slug)->firstOrFail();
        $enfermedad->enferme_nombre = $request->input('enferme_nombre'); 
        $enfermedad->enferme_estatus = $request->input('enferme_estatus');
        $enfermedad->baja = 0;
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
    public function destroy($enferme_id)
    {
       $enfermedad=Enfermedad::where('slug','=', $slug)->firstOrFail();
        $enfermedad->baja=1;
        $enfermedad->save();
        alert()->warning('SPAsssio', 'Enfermedad eliminada');
        return Redirect::to('/enfermedades');
    }
}
