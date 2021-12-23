<?php

namespace App\Http\Controllers;

use App\Models\EstadoPrograma;
use Illuminate\Http\Request;
use App\Models\Status;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class EstadoProgramaController extends Controller
{
    public function index(){
        $estadoprogramas = EstadoPrograma::all();
        return view('configuracion/estadoprograma.index')->with('estadoprogramas', $estadoprogramas);
    }

    public function create(){
        $estadoprogramas = Status::all();
        return view('configuracion/estadoprograma.create')->with('estadoprogramas', $estadoprogramas);
    }

    public function store(Request $request){
        $estadoprograma = new EstadoPrograma();
        $estadoprograma->est_nombre = $request->get('est_nombre');
        $estadoprograma->est_status = $request->get('est_status');

        $rules = [
            'est_nombre' => 'required',
            'est_status' => 'required'
        ];

        $messages = [
            'est_nombre.required' => 'Agrega el nombre del Estado'
        ];

        $this->validate($request, $rules, $messages);

        $estadoprograma->save();

        Alert::success('Registro Exitoso');

        return redirect('/estadoprograma');
    }

    public function show($id){
        $status = Status::all();
        $estadoprograma = EstadoPrograma::find($id);
        return view('configuracion/estadoprograma.show')
            ->with('status', $status)
            ->with('estadoprograma', $estadoprograma);
    }

    public function edit($id){
        $status =  Status::all();
        $estadoprograma = EstadoPrograma::find($id);
        return view('configuracion/estadoprograma.edit')
            ->with('status', $status)
            ->with('estadoprograma', $estadoprograma);
    }

    public function update(Request  $request, $id){
        $estadoprograma = EstadoPrograma::find($id);
        $estadoprograma->est_nombre = $request->get('est_nombre');
        $estadoprograma->est_status = $request->get('est_status');

        $estadoprograma->save();

        Alert::success('Registro Actualizado');
        return redirect('/estadoprograma');
    }

    public function destroy($id){
        $estadoprograma = EstadoPrograma::find($id);
        $estadoprograma->delete();
        Alert::success('Registro Eliminado');
        return redirect('/estadoprograma');
    }

    public function pdf(Request $request){
        $estadoprogramas = EstadoPrograma::all();
        $view = \view('configuracion/estadoprograma.pdf', compact('estadoprogramas', $estadoprogramas))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('reporte.pdf');
    }

  

    

}
