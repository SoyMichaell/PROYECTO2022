@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Visualizar</div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="fac_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Facultad *') }}</label>
                    <div class="col-md-12">
                        <input id="fac_nombre" type="text" class="form-control @error('fac_nombre') is-invalid @enderror"
                            name="fac_nombre" value="{{ $facultad->fac_nombre }}" disabled required autocomplete="fac_nombre"
                            autofocus>
                        @error('fac_nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fac_status" class="col-md-12 col-form-label text-md-right">{{ __('Status *') }}</label>
                    <div class="col-md-12">
                        <select class="form-select" name="fac_status" id="fac_status" disabled>
                            <option>---- SELECCIONE ----</option>
                            @foreach ($status as $statu)
                                <option value="{{ $statu->id }}"
                                    {{ $statu->id == $facultad->fac_status ? 'selected' : '' }}>
                                    {{ $statu->sta_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
