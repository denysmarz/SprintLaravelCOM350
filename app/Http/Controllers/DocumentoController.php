<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Profesion;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentos = Documento::all(); //eloquent ORM
        return view('documentos.index', [
            'documentos' => $documentos
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       /*return view('personas.create',[
            'profesiones' => Profesion::all()
       ]);^*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$fotografia = $request->file('fotografia');
        $nombreFoto = time().'.'.$fotografia->getClientOriginalExtension();
        $fotografia->move(public_path('img'), $nombreFoto);*/

        //$persona = new Persona();
        /*$persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->ci = $request->ci;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;
        $persona->profesion_id = $request->profesion_id;
        $persona->fotografia = $nombreFoto;
        $persona->save();
        return redirect()->route('personas.index');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        return view('documentos.show', [
            'documento' => $documento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(/*Persona $persona*/)
    {
        /*return view('personas.edit', [
            'persona' => $persona,
            'profesiones' => Profesion::all()
        ]);*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(/*Request $request, Persona $persona*/)
    {
        /*$persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->ci = $request->ci;
        $persona->direccion = $request->direccion;
        $persona->telefono = $request->telefono;
        $persona->email = $request->email;
        $persona->profesion_id = $request->profesion_id;
        if ($request->hasFile('fotografia')) {
            $fotografia = $request->file('fotografia');
            $nombreFoto = time().'.'.$fotografia->getClientOriginalExtension();
            $fotografia->move(public_path('img'), $nombreFoto);
            $persona->fotografia = $nombreFoto;
        }
        $persona->save();
        return redirect()->route('personas.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //dd($documento);
        $documento->delete();
        return redirect()->route('documentos.index');
    }
}
