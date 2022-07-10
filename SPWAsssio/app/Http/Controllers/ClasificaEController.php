<?php

namespace App\Http\Controllers;

use App\ClasificaE;
use Illuminate\Support\Str as Str;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class ClasificaEController extends Controller
{

    /**
     * Display a datatable of the resource
     *
     * @return  list of resource
     */
    public function datatable()
    {
        $clasificae=ClasificaE::where('baja','=',0)->get();
        return DataTables::of($clasificae)
                ->addColumn('edit','intAdmin.intClasificaE.botones.edit')
                ->addColumn('delete','intAdmin.intClasificaE.botones.delete')
                ->addColumn('show','intAdmin.intClasificaE.botones.show')
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
        $noClasificaE = ClasificaE::where('baja','=',0)->count();
        return view('intAdmin.intClasificaE.index',compact('noClasificaE'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intClasificaE.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clasificae = new Clasificae();
        $clasificae->CLASIFICA_NOMBRE = $request->input('nombre');
        $clasificae->CLASIFICA_DESC = $request->input('descripcion');
        $clasificae->slug=Str::slug($clasificae->CLASIFICA_NOMBRE."-".time());
        $clasificae->baja = 0;
        $clasificae->save();
        alert()->success('SPAsssio', 'Clasificación de ejercicio registrado correctamente');
        return Redirect::to('/ClassifyE');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $clasificae=ClasificaE::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intClasificaE.show',compact('clasificae'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $clasificae=Clasificae::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intClasificaE.edit',compact('clasificae'));
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
         $clasificae=Clasificae::where('slug','=', $slug)->firstOrFail();

        $clasificae->CLASIFICA_NOMBRE = $request->input('nombre');
        $clasificae->CLASIFICA_DESC = $request->input('descripcion');
        $clasificae->baja = 0;
        $clasificae->slug=Str::slug($clasificae->CLASIFICA_NOMBRE."-".time());
        $clasificae->save();
        alert()->success('SPAsssio', 'Clasificación registrado correctamente');
        return Redirect::to('/ClassifyE');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $clasificae=Clasificae::where('slug','=', $slug)->firstOrFail();
        $clasificae->baja=1;
        $clasificae->save();
        alert()->warning('SPAsssio', 'Clasificación eliminada');
        return Redirect::to('/ClassifyE');
    }
}
