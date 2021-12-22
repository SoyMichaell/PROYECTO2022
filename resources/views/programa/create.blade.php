@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create w-100">
            <div class="card-header"><i class="fas fa-plus-square"></i> Crear nuevo</div>
            <div class="card-body">
                <form action="/programa" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="pro_estado_programa"
                                class="col-md-12 col-form-label text-md-right">{{ __('Estado programa') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_estado_programa" id="pro_estado_programa">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($estadoprogramas as $estadoprograma)
                                        <option value="{{$estadoprograma->id}}">{{$estadoprograma->est_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_departamento"
                                class="col-md-12 col-form-label text-md-right">{{ __('Departamento') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_departamento" id="pro_departamento">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($departamentos as $departamento)
                                        <option value="{{$departamento->id}}">{{$departamento->dep_nombre}}</option>
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
                                <select class="form-select" name="pro_municipio" id="pro_municipio">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{$municipio->id}}">{{$municipio->mun_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_facultad"
                                class="col-md-12 col-form-label text-md-right">{{ __('Facultad') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_facultad" id="pro_facultad">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($facultades as $facultad)
                                        <option value="{{$facultad->id}}">{{$facultad->fac_nombre}}</option>
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
                                    value="{{ old('pro_nombre') }}" required autocomplete="pro_nombre" autofocus>
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
                                    name="pro_codigosnies" value="{{ old('pro_codigosnies') }}" required
                                    autocomplete="pro_codigosnies" autofocus>
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
                                    value="{{ old('pro_resolucion') }}" required autocomplete="pro_resolucion" autofocus>
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
                                    value="{{ old('pro_titulo') }}" required autocomplete="pro_titulo" autofocus>
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
                                    value="{{ old('pro_fecha_ult') }}" required autocomplete="pro_fecha_ult" autofocus>
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
                                    value="{{ old('pro_fecha_prox') }}" required autocomplete="pro_fecha_prox" autofocus>
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
                                <select class="form-select" name="pro_nivel_formacion" id="pro_nivel_formacion">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($niveles as $nivel)
                                        <option value="{{$nivel->id}}">{{$nivel->niv_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_programa_ciclos"
                                class="col-md-12 col-form-label text-md-right">{{ __('Progama por ciclos') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_programa_ciclos" id="pro_programa_ciclos">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($programasCiclo as $programaCiclo)
                                        <option value="{{$programaCiclo->id}}">{{$programaCiclo->prc_nombre}}</option>
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
                                <select class="form-select" name="pro_metodologia" id="pro_metodologia">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($metodologias as $metodologia)
                                        <option value="{{$metodologia->id}}">{{$metodologia->met_nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="pro_duraccion"
                                class="col-md-12 col-form-label text-md-right">{{ __('Duracción programa (semestres)') }}</label>
                            <div class="col-md-12">
                                <select class="form-select" name="pro_duraccion" id="pro_duraccion">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($tiemposList as $tiempoList)
                                        <option value="{{$tiempoList->id}}">{{$tiempoList->id}}</option>
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
                                <select class="form-select" name="pro_periodo" id="pro_periodo">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($periodos as $periodo)
                                        <option value="{{$periodo->id}}">{{$periodo->per_nombre}}</option>
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
                                    value="{{ old('pro_creditos') }}" required autocomplete="pro_creditos" autofocus>
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
                                    name="pro_asignaturas" value="{{ old('pro_asignaturas') }}" required
                                    autocomplete="pro_asignaturas" autofocus>
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
                                    value="{{ old('pro_norma') }}" required autocomplete="pro_norma" autofocus>
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
                                    class="form-control @error('pro_director_programa') is-invalid @enderror" name="pro_director_programa"
                                    value="{{ old('pro_director_programa') }}" required autocomplete="pro_director_programa" autofocus>
                                @error('pro_director_programa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-12 offset-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
@endsection