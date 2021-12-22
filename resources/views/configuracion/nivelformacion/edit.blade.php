@extends('layouts.app')
@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Editar registro</div>
            <div class="card-body">
                <form action="/nivelformacion/{{ $nivelformacion->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="niv_nombre"
                            class="col-md-12 col-form-label text-md-right">{{ __('Nivel Formación *') }}</label>
                        <div class="col-md-12">
                            <input id="niv_nombre" type="text" class="form-control @error('niv_nombre') is-invalid @enderror"
                                name="niv_nombre" value="{{ $nivelformacion->niv_nombre }}" required
                                autocomplete="niv_nombre" autofocus>
                            @error('niv_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="niv_status"
                            class="col-md-12 col-form-label text-md-right">{{ __('Status *') }}</label>
                        <div class="col-md-12">
                            <select class="form-select" name="niv_status" id="niv_status">
                                <option>---- SELECCIONE ----</option>
                                @foreach ($status as $statu)
                                    <option value="{{ $statu->id }}"
                                        {{ $statu->id == $nivelformacion->niv_status ? 'selected' : '' }}>
                                        {{ $statu->sta_nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-12 offset-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Editar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
