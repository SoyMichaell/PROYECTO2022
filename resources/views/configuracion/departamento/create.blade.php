@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Crear nuevo</div>
            <div class="card-body">
                <form action="/departamento" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="dep_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Departamento *') }}</label>
                        <div class="col-md-12">
                            <input id="dep_nombre" type="text" class="form-control @error('dep_nombre') is-invalid @enderror" name="dep_nombre" value="{{ old('dep_nombre') }}" autocomplete="dep_nombre" autofocus>
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
                                @foreach ($estadoprogramas as $estadoprograma)
                                    <option value="{{ $estadoprograma->id }}">{{ $estadoprograma->sta_nombre }}</option>
                                @endforeach
                            </select>
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
@endsection
