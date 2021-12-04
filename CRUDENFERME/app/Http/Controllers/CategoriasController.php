<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Support\Str as Str;
use Alert;
use Redirect,Response;
use DataTables;
use Cache;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function datatable()
    {
        $categorias=Categoria::where('baja','=',0);
        return DataTables::of($categorias)
                ->addColumn('edit','intAdmin.intCategorias.botones.edit')
                ->addColumn('delete','intAdmin.intCategorias.botones.delete')
                ->addColumn('show','intAdmin.intCategorias.botones.show')
                ->rawColumns(['edit','delete','show'])
                ->toJson();  
    }




    public function index()
    {
        $noCategorias = Categoria::where('baja','=',0)->count();
        return view('intAdmin.intCategorias.index',compact('noCategorias'));        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intCategorias.create');
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
        $categoria = new Categoria();
        $categoria->catego_nombre = $request->input('nombre'); 
        $categoria->descripcion_categoria = $request->input('descripcion');
        $categoria->baja = 0;
        $categoria->save();
        alert()->success('SPAsssio', 'Categoria registrada correctamente');
        return Redirect::to('/categories');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
     {
        $categoria=Categoria::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intCategorias.show',compact('categoria'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $categoria=Categoria::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intCategorias.edit',compact('categoria'));    
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
        $categoria=Categoria::where('slug','=',$slug)->firstOrFail();
        $categoria->catego_nombre = $request->input('nombre'); 
        $categoria->descripcion_categoria = $request->input('descripcion');
        $categoria->baja = 0;
        $categoria->save();
        alert()->success('SPAsssio', 'Categoria registrada correctamente');
        return Redirect::to('/categories');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
   {
        $categoria=Categoria::find('slug','=',$slug)->firstOrFail();
        $categoria->baja=1;
        $categoria->save();
        alert()->warning('SPAsssio', 'Categoria eliminada');
        return Redirect::to('/categories');
    }
}
