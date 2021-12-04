<?php

namespace App\Http\Controllers;


use App\Rutina;
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
        $rutina = new Rutinas();
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
         $noRutinas = new Rutina();
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
        return view('intAdmin.intRutinas.create');
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
            $audio=time().$file->getClientOriginalName();
            $file->move(public_path().'/audiorutinas/',$audio);
            $rutina->audio=$audio;
        }

        $rutina = new Rutina();
        $rutina->name_rutina = $request->input('nombre'); 
        $rutina->instruction_rutina = $request->input('instruccion');
        $rutina->baja = 0;
        $rutina->save();
        alert()->success('SPAsssio', 'Rutina registrada correctamente');
        return Redirect::to('/routines');
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
            $audio=time().$file->getClientOriginalName();
            $file->move(public_path().'/audiorutinas/',$audio);
            $rutina->audio=$audio;
        }

            $rutina = new Rutina();
         $rutina=Rutina::find($id_rutina)->firstOrFail();
         
        $rutina->name_rutina = $request->input('nombre'); 
        $rutina->instruction_rutina = $request->input('instruccion');
        $rutina->baja = 0;
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
}
