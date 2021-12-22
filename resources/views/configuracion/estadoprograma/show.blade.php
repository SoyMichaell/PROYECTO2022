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
                    <label for="est_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Estado *') }}</label>
                    <div class="col-md-12">
                        <input id="est_nombre" type="text" class="form-control @error('est_nombre') is-invalid @enderror"
                            name="est_nombre" value="{{ $estadoprograma->est_nombre }}" required autocomplete="est_nombre"
                            readonly autofocus>
                        @error('est_nombre')
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
                                    {{ $statu->id == $estadoprograma->est_status ? 'selected' : '' }}>
                                    {{ $statu->sta_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
