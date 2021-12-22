<?php

namespace App\Http\Controllers;

use App\Models\NivelFormacion;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NivelFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivelformacions = NivelFormacion::all();
        return view('configuracion/nivelformacion.index')->with('nivelformacions', $nivelformacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('configuracion/nivelformacion.create')->with('status', $status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $niveles = new NivelFormacion();
        $niveles->niv_nombre = $request->get('niv_nombre');
        $niveles->niv_status = $request->get('niv_status');

        $niveles->save();

        Alert::success('Registro Exitoso');

        return redirect('/nivelformacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = Status::all();
        $nivelformacion = NivelFormacion::find($id);
        return view('configuracion/nivelformacion.show')
            ->with('nivelformacion',$nivelformacion)
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
        $status = Status::all();
        $nivelformacion = NivelFormacion::find($id);
        return view('configuracion/nivelformacion.edit')
            ->with('nivelformacion',$nivelformacion)
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
        $nivelformacion = NivelFormacion::find($id);
        $nivelformacion->niv_nombre = $request->get('niv_nombre');
        $nivelformacion->niv_status = $request->get('niv_status');

        $nivelformacion->save();

        Alert::success('Registro Actualizado');

        return redirect('/nivelformacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = NivelFormacion::find($id);
        $nivel->delete();

        Alert::success('Registro Eliminado');

        return redirect('/nivelformacion');
    }

    public function pdf(Request $request){
        $nivelformacions = NivelFormacion::all();
        $view = \view('configuracion/nivelformacion.pdf', compact('nivelformacions', $nivelformacions))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('nivelformacion-reporte.pdf');
    }

}
