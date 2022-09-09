<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Cargo;
use App\Models\Representante;


class AreaController extends Controller
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
        $area = Area::all();
        return view('area.index')->with('areas',  $area);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $cargos = Cargo::all();
        $representantes = Representante::all();
        return view('area.create')->with(['cargos'=>$cargos, 'representantes'=>$representantes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $areas = new Area();
        $areas->Nombre=$request->get('Nombre');
        $areas->Sigla=$request->get('Sigla');
        $areas->Piso=$request->get('Piso');
        $areas->Ubicacion=$request->get('Ubicacion');
        $areas->id_representante=$request->get('id_representante');
        $areas->id_cargo=$request->get('id_cargo');

        

        $areas->save();
        return redirect('/area');
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
        $area = Area::find($id);
        return view('area.edit')->with('area', $area);
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
        $area = Area::find($id);
        $area->Nombre=$request->get('Nombre');
        $area->Sigla=$request->get('Sigla');
        $area->Piso=$request->get('Piso');
        $area->Ubicacion=$request->get('Ubicacion');
        $area->id_representante=$request->get('id_representante');
        $area->id_cargo=$request->get('id_cargo');

        $area->save();
        return redirect('/area');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::find($id);
        $area->delete();
        return redirect('/area');
    }
}


