@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Crear nuevo</div>
            <div class="card-body">
                <form action="/municipio" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="mun_departamento" class="col-md-12 col-form-label text-md-right">{{__('Departamento *')}}</label>
                        <div class="col-md-12">
                            <select class="form-select" name="mun_departamento" id="mun_departamento">
                                @foreach ($departamentos as $departamento)
                                    <option value="{{$departamento->id}}">{{$departamento->dep_nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mun_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Municipio *') }}</label>
                        <div class="col-md-12">
                            <input id="mun_nombre" type="text" class="form-control @error('mun_nombre') is-invalid @enderror" name="mun_nombre" value="{{ old('mun_nombre') }}" autocomplete="mun_nombre" autofocus>
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
                            <select class="form-select" name="mun_status" id="mun_status">
                                @foreach ($status as $statu)
                                    <option value="{{$statu->id}}">{{$statu->sta_nombre}}</option>
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