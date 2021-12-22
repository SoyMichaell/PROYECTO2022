@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create w-100">
            <div class="card-header"><i class="fas fa-sync-alt"></i> Visualizar</div>
            <div class="card-body">
                <form action="/programa/{{ $programa->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_estado_programa"
                                class="col-md-12 col-form-label text-md-right">{{ __('Estado programa') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_estado_programa" id="pro_estado_programa" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($estadoprogramas as $estadoprograma)
                                        <option value="{{ $estadoprograma->id }}"
                                            {{ $estadoprograma->id == $programa->pro_estado_programa ? 'selected' : '' }}>
                                            {{ $estadoprograma->est_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_departamento"
                                class="col-md-12 col-form-label text-md-right">{{ __('Departamento') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_departamento" id="pro_departamento" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($departamentos as $departamento)
                                        <option value="{{ $departamento->id }}"
                                            {{ $departamento->id == $programa->pro_departamento ? 'selected' : '' }}>
                                            {{ $departamento->dep_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_municipio"
                                class="col-md-12 col-form-label text-md-right">{{ __('Municipio / sede') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_municipio" id="pro_municipio" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio->id }}"
                                            {{ $municipio->id == $programa->pro_municipio ? 'selected' : '' }}>
                                            {{ $municipio->mun_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_facultad"
                                class="col-md-12 col-form-label text-md-right">{{ __('Facultad') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_facultad" id="pro_facultad" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($facultades as $facultad)
                                        <option value="{{ $facultad->id }}"
                                            {{ $facultad->id == $programa->pro_facultad ? 'selected' : '' }}>
                                            {{ $facultad->fac_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_nombre"
                                class="col-md-12 col-form-label text-md-right">{{ __('Programa *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_nombre" type="text"
                                    class="form-control @error('pro_nombre') is-invalid @enderror" name="pro_nombre"
                                    value="{{ $programa->pro_nombre }}" required autocomplete="pro_nombre" autofocus disabled>
                                @error('pro_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_codigosnies"
                                class="col-md-12 col-form-label text-md-right">{{ __('Codgio SNIES *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_codigosnies" type="text"
                                    class="form-control @error('pro_codigosnies') is-invalid @enderror"
                                    name="pro_codigosnies" value="{{ $programa->pro_codigosnies }}" required
                                    autocomplete="pro_codigosnies" autofocus disabled>
                                @error('pro_codigosnies')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_resolucion"
                                class="col-md-12 col-form-label text-md-right">{{ __('Resolución *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_resolucion" type="text"
                                    class="form-control @error('pro_resolucion') is-invalid @enderror" name="pro_resolucion"
                                    value="{{ $programa->pro_resolucion }}" required autocomplete="pro_resolucion"
                                    autofocus disabled>
                                @error('pro_resolucion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_titulo"
                                class="col-md-12 col-form-label text-md-right">{{ __('Titulo *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_titulo" type="text"
                                    class="form-control @error('pro_titulo') is-invalid @enderror" name="pro_titulo"
                                    value="{{ $programa->pro_titulo }}" required autocomplete="pro_titulo" autofocus disabled>
                                @error('pro_titulo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_fecha_ult"
                                class="col-md-12 col-form-label text-md-right">{{ __('Fecha ultimo registro*') }}</label>
                            <div class="col-md-12">
                                <input id="pro_fecha_ult" type="date"
                                    class="form-control @error('pro_fecha_ult') is-invalid @enderror" name="pro_fecha_ult"
                                    value="{{ $programa->pro_fecha_ult }}" required autocomplete="pro_fecha_ult"
                                    autofocus disabled>
                                @error('pro_fecha_ult')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_fecha_prox"
                                class="col-md-12 col-form-label text-md-right">{{ __('Fecha proximo registro *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_fecha_prox" type="date"
                                    class="form-control @error('pro_fecha_prox') is-invalid @enderror" name="pro_fecha_prox"
                                    value="{{ $programa->pro_fecha_prox }}" autocomplete="pro_fecha_prox" autofocus disabled>
                                @error('pro_fecha_prox')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_nivel_formacion"
                                class="col-md-12 col-form-label text-md-right">{{ __('Nivel de formación ') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_nivel_formacion" id="pro_nivel_formacion" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($niveles as $nivel)
                                        <option value="{{ $nivel->id }}"
                                            {{ $nivel->id == $programa->pro_nivel_formacion ? 'selected' : '' }}>
                                            {{ $nivel->niv_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_programa_ciclos"
                                class="col-md-12 col-form-label text-md-right">{{ __('Progama por ciclos') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_programa_ciclos" id="pro_programa_ciclos" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($programasCiclo as $programaCiclo)
                                        <option value="{{ $programaCiclo->id }}"
                                            {{ $programaCiclo->id == $programa->pro_programa_ciclos ? 'selected' : '' }}>
                                            {{ $programaCiclo->prc_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_metodologia"
                                class="col-md-12 col-form-label text-md-right">{{ __('Metodologia ') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_metodologia" id="pro_metodologia" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($metodologias as $metodologia)
                                        <option value="{{ $metodologia->id }}"
                                            {{ $metodologia->id == $programa->pro_metodologia ? 'selected' : '' }}>
                                            {{ $metodologia->met_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_duraccion"
                                class="col-md-12 col-form-label text-md-right">{{ __('Duracción programa (semestres)') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_duraccion" id="pro_duraccion" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($tiemposList as $tiempoList)
                                        <option value="{{ $tiempoList->id }}"
                                            {{ $tiempoList->id == $programa->pro_duraccion ? 'selected' : '' }}>
                                            {{ $tiempoList->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_periodo"
                                class="col-md-12 col-form-label text-md-right">{{ __('Periodo de admisión ') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_periodo" id="pro_periodo" disabled>
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($periodos as $periodo)
                                        <option value="{{ $periodo->id }}"
                                            {{ $periodo->id == $programa->pro_periodo ? 'selected' : '' }}>
                                            {{ $periodo->per_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_creditos"
                                class="col-md-12 col-form-label text-md-right">{{ __('Número de creditos *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_creditos" type="number"
                                    class="form-control @error('pro_creditos') is-invalid @enderror" name="pro_creditos"
                                    value="{{ $programa->pro_creditos }}" required autocomplete="pro_creditos" autofocus disabled>
                                @error('pro_creditos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_asignaturas"
                                class="col-md-12 col-form-label text-md-right">{{ __('Número de asignaturas *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_asignaturas" type="number"
                                    class="form-control @error('pro_asignaturas') is-invalid @enderror"
                                    name="pro_asignaturas" value="{{ $programa->pro_asignaturas }}" required
                                    autocomplete="pro_asignaturas" autofocus disabled>
                                @error('pro_asignaturas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_norma"
                                class="col-md-12 col-form-label text-md-right">{{ __('Norma creación programa *') }}</label>
                            <div class="col-md-12">
                                <input id="pro_norma" type="text"
                                    class="form-control @error('pro_norma') is-invalid @enderror" name="pro_norma"
                                    value="{{ $programa->pro_norma }}" required autocomplete="pro_norma" autofocus disabled>
                                @error('pro_norma')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="pro_director_programa"
                                class="col-md-12 col-form-label text-md-right">{{ __('Director de programa') }}</label>
                            <div class="col-md-12">
                                <input id="pro_director_programa" type="text"
                                    class="form-control @error('pro_director_programa') is-invalid @enderror"
                                    name="pro_director_programa" value="{{ $programa->pro_director_programa }}" required
                                    autocomplete="pro_director_programa" autofocus disabled>
                                @error('pro_director_programa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection
