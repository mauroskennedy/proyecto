<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Representante;
use App\Models\Cargo;
use App\Models\Organizacionsocial;

class RepresentanteController extends Controller
{
      public function __constructor(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $representantes= Representante::all();
        return view('representante.index')->with('representantes',  $representantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        $organizacionsocials = Organizacionsocial::all();
        return view('representante.create')->with(['cargos'=>$cargos, 'organizacionsocials'=>$organizacionsocials]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $representantes = new Representante();
        $representantes->Nombre=$request->get('Nombre');
        $representantes->Celular=$request->get('Celular');
        $representantes->Carnet=$request->get('Carnet');
        $representantes->id_cargo=$request->get('id_cargo');
        $representantes->id_organizacionsocial=$request->get('id_organizacionsocial');

        $representantes->save();
        return redirect('/representante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $representante = Representante::find($id);

        return view('representante.edit')->with('representante', $representante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $representante = Representante::find($id);
        $representante->Nombre=$request->get('Nombre');
        $representante->Celular=$request->get('Celular');
        $representante->Carnet=$request->get('Carnet');
        $representante->id_cargo=$request->get('id_cargo');
        $representante->id_organizacionsocial=$request->get('id_organizacionsocial');     


        $representante->save();
        return redirect('/representante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $representante = Representante::find($id);
        $representante->delete();
        return redirect('/representante');
    }
}
