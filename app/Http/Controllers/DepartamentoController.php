<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('configuracion/departamento.index')->with('departamentos', $departamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoprogramas = Status::all();
        return view('configuracion/departamento.create')->with('estadoprogramas', $estadoprogramas);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamentos = new Departamento();
        $departamentos->dep_nombre = $request->get('dep_nombre');
        $departamentos->dep_status = $request->get('dep_status');

        $departamentos->save();

        Alert::success('Registro Exitoso');

        return redirect('/departamento');
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
        $departamento = Departamento::find($id);
        return view('configuracion/departamento.show')
            ->with('status', $status)
            ->with('departamento', $departamento);
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
        $departamento = Departamento::find($id);
        return view('configuracion/departamento.edit')
            ->with('departamento', $departamento)
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
        $departamento = Departamento::find($id);
        $departamento->dep_nombre = $request->get('dep_nombre');
        $departamento->dep_status = $request->get('dep_status');

        $departamento->save();

        Alert::success('Registro Actualizado');

        return redirect('/departamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Departamento::find($id);
        $departamento->delete();

        Alert::success('Registro Eliminado');

        return redirect('/departamento');
    }

    public function pdf(Request $request){
        $departamentos = Departamento::all();
        $view = \view('configuracion/departamento.pdf', compact('departamentos', $departamentos))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('departamentos-reporte.pdf');
    }


}
