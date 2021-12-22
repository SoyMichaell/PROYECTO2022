@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Visualizar</div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="mun_departamento"
                        class="col-md-12 col-form-label text-md-right">{{ __('Departamento *') }}</label>
                    <div class="col-md-12">
                        <select class="form-select" name="mun_departamento" id="mun_departamento" disabled>
                            <option value="">---- SELECCIONE ----</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}"
                                    {{ $departamento->id == $municipio->mun_departamento ? 'selected' : '' }}>
                                    {{ $departamento->dep_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mun_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Municipio *') }}</label>
                    <div class="col-md-12">
                        <input id="mun_nombre" type="text" class="form-control @error('mun_nombre') is-invalid @enderror"
                            name="mun_nombre" value="{{ $municipio->mun_nombre }}" disabled required autocomplete="mun_nombre"
                            autofocus>
                        @error('mun_nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mun_status" class="col-md-12 col-form-label text-md-right">{{ __('Status *') }}</label>
                    <div class="col-md-12">
                        <select class="form-select" name="mun_status" id="mun_status" disabled>
                            <option>---- SELECCIONE ----</option>
                            @foreach ($status as $statu)
                                <option value="{{ $statu->id }}"
                                    {{ $statu->id == $departamento->dep_status ? 'selected' : '' }}>
                                    {{ $statu->sta_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
