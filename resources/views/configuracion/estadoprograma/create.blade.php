@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Crear nuevo</div>
            <div class="card-body">
                <form action="/estadoprograma" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="est_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Estado *') }}</label>
                        <div class="col-md-12">
                            <input id="est_nombre" type="text" class="form-control @error('est_nombre') is-invalid @enderror" name="est_nombre" value="{{ old('est_nombre') }}" autocomplete="est_nombre" autofocus>
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
                            <select class="form-select" name="est_status" id="est_status">
                                @foreach ($estadoprogramas as $estadoprograma)
                                    <option value="{{$estadoprograma->id}}">{{$estadoprograma->sta_nombre}}</option>
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