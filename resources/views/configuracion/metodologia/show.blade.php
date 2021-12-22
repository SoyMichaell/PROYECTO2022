@extends('layouts.app')

@section('content')
    <div class="slot"></div>
    <div class="container">
        <div class="card card-create">
            <div class="card-header">Visualizar</div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="met_nombre"
                        class="col-md-12 col-form-label text-md-right">{{ __('Metodologia *') }}</label>
                    <div class="col-md-12">
                        <input id="met_nombre" type="text" class="form-control @error('met_nombre') is-invalid @enderror"
                            name="met_nombre" value="{{ $metodologia->met_nombre }}" required autocomplete="met_nombre"
                            autofocus disabled>
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
                        <select class="form-select" name="met_status" id="met_status" disabled>
                            <option selected>---- SELECCIONE ----</option>
                            @foreach ($status as $statu)
                                <option value="{{ $statu->id }}"
                                    {{ $statu->id == $metodologia->met_status ? 'selected' : '' }}>
                                    {{ $statu->sta_nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
