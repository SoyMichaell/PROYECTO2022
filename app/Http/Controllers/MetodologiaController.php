<?php

namespace App\Http\Controllers;

use App\Models\Metodologia;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MetodologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodologias = Metodologia::all();
        return view('configuracion/metodologia.index')->with('metodologias', $metodologias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('configuracion/metodologia.create')->with('status', $status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $metodologias = new Metodologia();
        $metodologias->met_nombre = $request->get('met_nombre');
        $metodologias->met_status = $request->get('met_status');
        $metodologias->save();

        Alert::success('Registro Exitoso');

        return redirect('/metodologia');
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
        $metodologia = Metodologia::find($id);
        return view('configuracion/metodologia.show')
            ->with('metodologia', $metodologia)
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
        $metodologia = Metodologia::find($id);
        return view('configuracion/metodologia.edit')
            ->with('metodologia', $metodologia)
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
        $metodologia = Metodologia::find($id);
        $metodologia->met_nombre = $request->get('met_nombre');
        $metodologia->met_status = $request->get('met_status');
        
        $metodologia->save();

        Alert::success('Registro Actualizado');

        return redirect('/metodologia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metodologia = Metodologia::find($id);
        $metodologia->delete();

        Alert::success('Registro Eliminado');

        return redirect('/metodologia');
    }

    public function pdf(Request $request){
        $metodologias = Metodologia::all();
        $view = \view('configuracion/metodologia.pdf', compact('metodologias', $metodologias))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('metodologia-reporte.pdf');
    }

}
