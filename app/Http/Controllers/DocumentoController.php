<?php

namespace App\Http\Controllers;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estante;
class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        
        $texto=$request->get('texto');
        $documentos = Documento::where("nombre",'like','%'.$request->texto.'%')->get();
        return view('documentos.index', [
            'documentos' => $documentos,'texto'=>$texto
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documentos.create',[
            'estantes' => Estante::all()
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $documento = new Documento();
        $documento->nombre = $request->nombre;
        $documento->autor = $request->autor;
        $documento->estante_id = $request->estante_id;
        $documento->created_at = $request->fecha;
        
        $documento->save();
        return redirect()->route('documentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        return view('documentos.edit', [
            'documento' => $documento,
            'estantes' => Estante::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
    
        $documento->estante_id = $request->estante_id;
        $documento->save();
        return redirect()->route('documentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //dd($documento);
        $documento->delete();
        return redirect()->route('documentos.index');
    }
}
