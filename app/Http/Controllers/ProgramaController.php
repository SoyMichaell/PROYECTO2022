<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\EstadoPrograma;
use App\Models\Facultad;
use App\Models\Metodologia;
use App\Models\Municipio;
use App\Models\Programa;
use App\Models\NivelFormacion;
use App\Models\Periodo;
use App\Models\ProgramaCiclo;
use App\Models\TiempoList;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;


class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::all();
        return view('programa.index')->with('programas', $programas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadoprogramas = EstadoPrograma::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $facultades = Facultad::all();
        $niveles = NivelFormacion::all();
        $metodologias = Metodologia::all();
        $tiemposList = TiempoList::all();
        $programasCiclo = ProgramaCiclo::all();
        $periodos = Periodo::all();

        return view('programa.create')->with('estadoprogramas', $estadoprogramas)
            ->with('departamentos', $departamentos)
            ->with('municipios', $municipios)
            ->with('facultades', $facultades)
            ->with('niveles', $niveles)
            ->with('metodologias', $metodologias)
            ->with('tiemposList', $tiemposList)
            ->with('programasCiclo', $programasCiclo)
            ->with('periodos', $periodos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programas = new Programa();
        $programas->pro_estado_programa = $request->get('pro_estado_programa');
        $programas->pro_departamento = $request->get('pro_departamento');
        $programas->pro_municipio = $request->get('pro_municipio');
        $programas->pro_facultad = $request->get('pro_facultad');
        $programas->pro_nombre = $request->get('pro_nombre');
        $programas->pro_titulo = $request->get('pro_titulo');
        $programas->pro_codigosnies = $request->get('pro_codigosnies');
        $programas->pro_resolucion = $request->get('pro_resolucion');
        $programas->pro_fecha_ult = $request->get('pro_fecha_ult');
        $programas->pro_fecha_prox = $request->get('pro_fecha_prox');
        $programas->pro_nivel_formacion = $request->get('pro_nivel_formacion');
        $programas->pro_programa_ciclos = $request->get('pro_programa_ciclos');
        $programas->pro_metodologia = $request->get('pro_metodologia');
        $programas->pro_duraccion = $request->get('pro_duraccion');
        $programas->pro_periodo = $request->get('pro_periodo');
        $programas->pro_creditos = $request->get('pro_creditos');
        $programas->pro_asignaturas = $request->get('pro_asignaturas');
        $programas->pro_norma = $request->get('pro_norma');
        $programas->pro_director_programa = $request->get('pro_director_programa');

        $programas->save();

        Alert::success('Registro Exitoso');

        return redirect('/programa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoprogramas = EstadoPrograma::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $facultades = Facultad::all();
        $niveles = NivelFormacion::all();
        $metodologias = Metodologia::all();
        $tiemposList = TiempoList::all();
        $programasCiclo = ProgramaCiclo::all();
        $periodos = Periodo::all();
        $programa = Programa::find($id);
        return view('programa.show')->with('programa', $programa)
            ->with('estadoprogramas', $estadoprogramas)
            ->with('departamentos', $departamentos)
            ->with('municipios', $municipios)
            ->with('facultades', $facultades)
            ->with('niveles', $niveles)
            ->with('metodologias', $metodologias)
            ->with('tiemposList', $tiemposList)
            ->with('programasCiclo', $programasCiclo)
            ->with('periodos', $periodos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadoprogramas = EstadoPrograma::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $facultades = Facultad::all();
        $niveles = NivelFormacion::all();
        $metodologias = Metodologia::all();
        $tiemposList = TiempoList::all();
        $programasCiclo = ProgramaCiclo::all();
        $periodos = Periodo::all();
        $programa = Programa::find($id);
        return view('programa.edit')->with('programa', $programa)
            ->with('estadoprogramas', $estadoprogramas)
            ->with('departamentos', $departamentos)
            ->with('municipios', $municipios)
            ->with('facultades', $facultades)
            ->with('niveles', $niveles)
            ->with('metodologias', $metodologias)
            ->with('tiemposList', $tiemposList)
            ->with('programasCiclo', $programasCiclo)
            ->with('periodos', $periodos);
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
        $programa = Programa::find($id);
        $programa->pro_estado_programa = $request->get('pro_estado_programa');
        $programa->pro_departamento = $request->get('pro_departamento');
        $programa->pro_municipio = $request->get('pro_municipio');
        $programa->pro_facultad = $request->get('pro_facultad');
        $programa->pro_nombre = $request->get('pro_nombre');
        $programa->pro_titulo = $request->get('pro_titulo');
        $programa->pro_codigosnies = $request->get('pro_codigosnies');
        $programa->pro_resolucion = $request->get('pro_resolucion');
        $programa->pro_fecha_ult = $request->get('pro_fecha_ult');
        $programa->pro_fecha_prox = $request->get('pro_fecha_prox');
        $programa->pro_nivel_formacion = $request->get('pro_nivel_formacion');
        $programa->pro_programa_ciclos = $request->get('pro_programa_ciclos');
        $programa->pro_metodologia = $request->get('pro_metodologia');
        $programa->pro_duraccion = $request->get('pro_duraccion');
        $programa->pro_periodo = $request->get('pro_periodo');
        $programa->pro_creditos = $request->get('pro_creditos');
        $programa->pro_asignaturas = $request->get('pro_asignaturas');
        $programa->pro_norma = $request->get('pro_norma');
        $programa->pro_director_programa = $request->get('pro_director_programa');

        $programa->save();

        Alert::success('Registro Actualizado');

        return redirect('/programa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf(Request $request){
        $programas = Programa::all();
        $view = \view('programa.pdf', compact('programas', $programas))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->setPaper('A4', 'landscape');
        $pdf->loadHTML($view);
        return $pdf->stream('programas-reporte.pdf');
    }
}
