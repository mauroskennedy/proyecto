<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizacionsocial;

class OrganizacionsocialController extends Controller
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
        $organizacionsocial = Organizacionsocial::all();
        return view('organizacionsocial.index')->with('organizacionsocials',  $organizacionsocial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organizacionsocial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organizacionsocials = new Organizacionsocial();
        $organizacionsocials->Nombre=$request->get('Nombre');
        $organizacionsocials->Sigla=$request->get('Sigla');
        $organizacionsocials->Direccion=$request->get('Direccion');

        

        $organizacionsocials->save();
        return redirect('/organizacionsocial');
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
        $organizacionsocial = Organizacionsocial::find($id);
        return view('organizacionsocial.edit')->with('organizacionsocial', $organizacionsocial);
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
        $organizacionsocial = Organizacionsocial::find($id);
        $organizacionsocial->Nombre=$request->get('Nombre');
        $organizacionsocial->Sigla=$request->get('Sigla');
        $organizacionsocial->Direccion=$request->get('Direccion');

        

        $organizacionsocial->save();
        return redirect('/organizacionsocial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organizacionsocial = Organizacionsocial::find($id);
        $organizacionsocial->delete();
        return redirect('/organizacionsocial');
    }
}
