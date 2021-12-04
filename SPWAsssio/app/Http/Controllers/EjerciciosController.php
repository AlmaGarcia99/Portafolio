<?php

namespace App\Http\Controllers;

use App\Ejercicio;
use Illuminate\Support\Str as Str;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class EjerciciosController extends Controller
{
    
    /**
     * Display a datatable of the resource
     *
     * @return  list of resource
     */
    public function datatable()
    {
        $ejercicios=Ejercicio::where('baja','=',0);
        return DataTables::of($ejercicios)
                ->addColumn('edit','intAdmin.intEjercicios.botones.edit')
                ->addColumn('delete','intAdmin.intEjercicios.botones.delete')
                ->addColumn('show','intAdmin.intEjercicios.botones.show')
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
        $noEjercicios = Ejercicio::where('baja','=',0)->count();
        return view('intAdmin.intEjercicios.index',compact('noEjercicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intEjercicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ejercicio = new Ejercicio();
        if($request->hasFile('gif')){
            $file=$request->file('gif');
            $foto=time().$file->getClientOriginalName();
            $file->move(public_path().'/imgejercicios/',$foto);
            $ejercicio->imagen_ejercicio=$foto;
        }
        $ejercicio->nombre_ejercicio = $request->input('nombre'); 
        $ejercicio->descripcion_ejercicio = $request->input('descripcion');
        $ejercicio->slug=Str::slug($ejercicio->nombre_ejercicio."-".time());
        $ejercicio->baja = 0;
        $ejercicio->save();
        alert()->success('SPAsssio', 'Ejercicio registrado correctamente');
        return Redirect::to('/exercises');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $ejercicio=Ejercicio::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intEjercicios.show',compact('ejercicio'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $ejercicio=Ejercicio::where('slug','=', $slug)->firstOrFail();
        return view('intAdmin.intEjercicios.edit',compact('ejercicio'));    
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
         $ejercicio=Ejercicio::where('slug','=', $slug)->firstOrFail();
         if($request->hasFile('gif')){
            $file_path = public_path() . "/imgejercicios/$ejercicio->imagen_ejercicio";
            \File::delete($file_path);
            $file=$request->file('gif');
            $foto=time().$file->getClientOriginalName();
            $file->move(public_path().'/imgejercicios/',$foto);
            $ejercicio->imagen_ejercicio=$foto;
        }
        $ejercicio->nombre_ejercicio = $request->input('nombre'); 
        $ejercicio->descripcion_ejercicio = $request->input('descripcion');
        $ejercicio->baja = 0;
        $ejercicio->slug=Str::slug($ejercicio->nombre_ejercicio."-".time());
        $ejercicio->save();
        alert()->success('SPAsssio', 'Ejercicio registrado correctamente');
        return Redirect::to('/exercises');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $ejercicio=Ejercicio::where('slug','=', $slug)->firstOrFail();
        $ejercicio->baja=1;
        $ejercicio->save();
        alert()->warning('SPAsssio', 'Ejercicio eliminado');
        return Redirect::to('/exercises');
    }
}
