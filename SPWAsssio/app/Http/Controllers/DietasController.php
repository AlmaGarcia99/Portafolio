<?php

namespace App\Http\Controllers;

use Alert;
use App\Dieta;
use App\User;
use Cache;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Redirect,Response;

class DietasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function datatable()
    {
        $dietas=Dieta::where('baja','=',0)->get();
        return DataTables::of($dietas)
                ->addColumn('edit','intAdmin.intDietas.botones.edit')
                ->addColumn('delete','intAdmin.intDietas.botones.delete')
                ->addColumn('show','intAdmin.intDietas.botones.show')
                ->rawColumns(['edit','delete','show'])
                ->toJson();
    }

 public function index()
    {
        $noDietas = Dieta::where('baja','=',0)->count();
        return view('intAdmin.intDietas.index',compact('noDietas'));        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        $users = User::all();
        return view('intAdmin.intDietas.create',compact('users'));
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
        $dieta = new Dieta();
        $dieta->titu_dieta = $request->input('nombre');
        $dieta->descrip_dieta = $request->input('descripcion');
        $dieta->baja = 0;
        $dieta->slug = Str::slug($dieta->titu_dieta."-".time());
        $dieta->save();
        alert()->success('SPAsssio', 'Dieta registrada correctamente');
        return Redirect::to('/diets');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

public function show($slug)
     {
        $dieta=Dieta::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intDietas.show',compact('dieta'));
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($slug)
    {
        $dieta=Dieta::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intDietas.edit',compact('dieta'));
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
        $dieta=Dieta::where('slug','=',$slug)->firstOrFail();
        $dieta->titu_dieta = $request->input('nombre');
        $dieta->descrip_dieta= $request->input('descripcion');
        $dieta->baja = 0;
        $dieta->slug = Str::slug($dieta->titu_dieta."-".time());
        $dieta->save();
        alert()->success('SPAsssio', 'Dieta registrada correctamente');
        return Redirect::to('/diets');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


public function destroy($slug)
   {
        $dieta=Dieta::find('slug','=',$slug)->firstOrFail();
        $dieta->baja=1;
        $dieta->save();
        alert()->warning('SPAsssio', 'Dieta eliminada');
        return Redirect::to('/diets');
    }


}
