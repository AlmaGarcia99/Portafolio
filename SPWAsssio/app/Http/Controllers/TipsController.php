<?php

namespace App\Http\Controllers;

use App\Tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str as Str;
use Redirect,Response;
use DataTables;


class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        $tips=Tip::where('baja','=',0)->get();
        return DataTables::of($tips)
                ->addColumn('edit','intAdmin.intTips.botones.edit')
                ->addColumn('delete','intAdmin.intTips.botones.delete')
                ->rawColumns(['edit','delete'])
                ->toJson();
    }
    
    public function index()
    {
        $noTips = Tip::where('baja','=',0)->count();
        return view('intAdmin.intTips.tipsl',compact('noTips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intAdmin.intTips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tip = new Tip();
        if($request->hasFile('jpg')){
            $file=$request->file('jpg');
            $foto=time().$file->getClientOriginalName();
            $file->move(public_path().'/ImgTips/',$foto);
            $tip->imagen=$foto;
        }
        $tip->titulo = $request->input('nombre');
        $tip->descripcion = $request->input('contenido');
        $tip->baja = 0;
        $tip->slug = Str::slug($tip->titulo."-".time());
        $tip->save();
        alert()->success('SPAsssio', 'Tip registrado correctamente');
        return Redirect::to('/tips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $tips=Tip::where('slug','=',$slug)->firstOrFail();
        return view('intAdmin.intTips.edit',compact('tips'));
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
        $tip=Tip::where('slug','=',$slug)->firstOrFail();
        if($request->hasFile('jpg')){
            $file_path = public_path() . "/ImgTips/$tip->imagen";
            \File::delete($file_path);
            $file=$request->file('jpg');
            $foto=time().$file->getClientOriginalName();
            $file->move(public_path().'/ImgTips/',$foto);
            $tip->imagen=$foto;
        }
        $tip->titulo = $request->input('titulo');
        $tip->descripcion= $request->input('descripcion');
        $tip->baja = 0;
        $tip->slug = Str::slug($tip->titulo."-".time());
        $tip->save();
        alert()->success('SPAsssio', 'Tip actualizado correctamente');
        return Redirect::to('/tips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $tip=Tip::where('slug',$slug)->firstOrFail();
        $tip->baja=1;
        $tip->save();
        alert()->warning('SPAsssio', 'Tip eliminado');
        return Redirect::to('/tips');
    }
}
