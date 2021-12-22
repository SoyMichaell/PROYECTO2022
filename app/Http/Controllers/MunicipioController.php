<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::all();
        return view ('configuracion/municipio.index')->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $departamentos = Departamento::all();
        return view ('configuracion/municipio.create')
            ->with('departamentos', $departamentos)
            ->with('status', $status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipios = new Municipio();
        $municipios->mun_departamento = $request->get('mun_departamento');
        $municipios->mun_nombre = $request->get('mun_nombre');
        $municipios->mun_status = $request->get('mun_status');

        $municipios->save();
        
        Alert::success('Registro Exitoso');

        return redirect('/municipio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamentos = Departamento::all();     
        $status = Status::all();   
        $municipio = Municipio::find($id);

        return view('configuracion/municipio.show')
            ->with('municipio', $municipio)
            ->with('departamentos', $departamentos)
            ->with('status', $status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = Departamento::all();     
        $status = Status::all();   
        $municipio = Municipio::find($id);

        return view('configuracion/municipio.edit')
            ->with('municipio', $municipio)
            ->with('departamentos', $departamentos)
            ->with('status', $status);
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
        $municipio = Municipio::find($id);
        $municipio->mun_departamento = $request->get('mun_departamento');
        $municipio->mun_nombre = $request->get('mun_nombre');
        $municipio->mun_status = $request->get('mun_status');

        $municipio->save();

        Alert::success('Registro Actualizado');

        return redirect('/municipio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio = Municipio::find($id);
        $municipio->delete();

        Alert::success('Registro Eliminado');

        return redirect('/municipio');
    }

    public function pdf(Request $request){
        $municipios = Municipio::all();
        $view = \view('configuracion/municipio.pdf', compact('municipios', $municipios))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('municipio-reporte.pdf');
    }

}
