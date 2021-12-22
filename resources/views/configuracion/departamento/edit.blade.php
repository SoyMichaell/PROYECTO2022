@extends('layouts.app')
@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Editar registro</div>
            <div class="card-body">
                <form action="/departamento/{{ $departamento->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="dep_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Departamento *') }}</label>
                        <div class="col-md-12">
                            <input id="dep_nombre" type="text" class="form-control @error('dep_nombre') is-invalid @enderror"
                                name="dep_nombre" value="{{ $departamento->dep_nombre }}" required
                                autocomplete="dep_nombre" autofocus>
                            @error('dep_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="dep_status"
                            class="col-md-12 col-form-label text-md-right">{{ __('Status *') }}</label>
                        <div class="col-md-12">
                            <select class="form-select" name="dep_status" id="dep_status">
                                <option>---- SELECCIONE ----</option>
                                @foreach ($status as $statu)
                                    <option value="{{ $statu->id }}"
                                        {{ $statu->id == $departamento->dep_status ? 'selected' : '' }}>
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
