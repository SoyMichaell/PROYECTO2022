<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Facultad::all();
        return view('configuracion/facultad.index')->with('facultades', $facultades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('configuracion/facultad.create')->with('status', $status);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facultades = new Facultad();
        $facultades->fac_nombre = $request->get('fac_nombre');
        $facultades->fac_status = $request->get('fac_status');

        $rules = [
            'fac_nombre' => 'required'
        ];

        $messages = [
            'fac_nombre.required' => 'Agregue el nombre de la Facultad'
        ];

        $this->validate($request, $rules, $messages);

        $facultades->save();
        
        Alert::success('Registro Exitoso');

        return redirect('/facultad');
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
        $facultad = Facultad::find($id);
        return view('configuracion/facultad.show')
            ->with('facultad', $facultad)
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
        $facultad = Facultad::find($id);
        return view('configuracion/facultad.edit')
            ->with('facultad', $facultad)
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
        $facultad = Facultad::find($id);
        $facultad->fac_nombre = $request->get('fac_nombre');
        $facultad->fac_status = $request->get('fac_status');

        $facultad->save();

        Alert::success('Registro Actualizado');

        return redirect('/facultad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facultad = Facultad::find($id);
        $facultad->delete();

        Alert::success('Registro Eliminado');

        return redirect('/facultad');
    }

    public function pdf(Request $request){
        $facultades = Facultad::all();
        $view = \view('configuracion/facultad.pdf', compact('facultades', $facultades))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('facultad-reporte.pdf');
    }

}
