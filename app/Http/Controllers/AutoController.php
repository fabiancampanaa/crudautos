<?php

namespace App\Http\Controllers;

use App\auto;
use Illuminate\Http\Request;
use Session;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::all();
        return view('Autos.index', compact('autos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Autos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Modelo' => 'required',
            'Marca' => 'required',
            'Color' => 'required',
        ]);

        Auto::create($request->all());
        Session::flash('message','Vehiculo Creado Correctamente');
        return redirect()->route('autos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(auto $auto)
    {
        return view('Autos.modificar',compact('auto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auto $auto)
    {
        $request->validate([
            'Modelo' => 'required',
            'Marca' => 'required',
            'Color' => 'required',
        ]);
        
        //$auto = Auto::find($request->id);
        //$auto->Modelo = $request->get('Modelo');
        //$auto->Marca = $request->get('Marca');
        //$auto->Color = $request->get('Color');
        //$auto->save();


        $auto->update($request->all());
        Session::flash('message','Vehiculo Modificado Correctamente');
        return redirect()->route('autos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(auto $auto)
    {
        $auto = Auto::find($auto->id);
        $auto->delete();

        Session::flash('message','Vehiculo Modificado Correctamente');
        return redirect()->route('autos.index');
    }
}
