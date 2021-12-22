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
                    <label for="dep_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Departamento *') }}</label>
                    <div class="col-md-12">
                        <input id="dep_nombre" type="text" class="form-control @error('dep_nombre') is-invalid @enderror"
                            name="dep_nombre" value="{{ $departamento->dep_nombre }}" required autocomplete="dep_nombre"
                            readonly autofocus>
                        @error('dep_nombre')
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
