@extends('layouts.app')
@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a class="btn btn-sm btn-primary" href="./">VOLVER</a>
        </div>
        <div class="card card-create mt-4">
            <div class="card-header">Vista registro</div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="niv_nombre"
                        class="col-md-12 col-form-label text-md-right">{{ __('Nivel Formación *') }}</label>
                    <div class="col-md-12">
                        <input id="niv_nombre" type="text" class="form-control @error('niv_nombre') is-invalid @enderror"
                            name="niv_nombre" value="{{ $nivelformacion->niv_nombre }}" required autocomplete="niv_nombre"
                            readonly autofocus>
                        @error('niv_nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="est_status" class="col-md-12 col-form-label text-md-right">{{ __('Status *') }}</label>
                    <div class="col-md-12">
                        <select class="form-select" name="est_status" id="est_status" aria-readonly="">
                            <option>---- SELECCIONE ----</option>
                            @foreach ($status as $statu)
                                <option value="{{ $statu->id }}" disabled
                                    {{ $statu->id == $nivelformacion->niv_status ? 'selected' : '' }}>
                                    {{ $statu->sta_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
