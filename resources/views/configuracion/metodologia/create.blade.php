@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Crear nuevo</div>
            <div class="card-body">
                <form action="/metodologia" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="met_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Metodologia *') }}</label>
                        <div class="col-md-12">
                            <input id="met_nombre" type="text" class="form-control @error('met_nombre') is-invalid @enderror" name="met_nombre" value="{{ old('met_nombre') }}" required autocomplete="met_nombre" autofocus>
                            @error('met_nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="met_status" class="col-md-12 col-form-label text-md-right">{{ __('Status *') }}</label>
                        <div class="col-md-12">
                            <select class="form-select" name="met_status" id="met_status">
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