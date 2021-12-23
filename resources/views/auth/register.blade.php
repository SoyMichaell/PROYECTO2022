@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card mt-2">
                <div class="card-header">{{ __('Registro persona') }}</div>
                <div class="card-body">
                    <form method="POST" >
                        @csrf
                        <!--Tipo de documento-->
                        <div class="row mb-3">
                            <label for="per_tipo_documento" class="col-md-12 col-form-label text-md-right">{{ __('Tipo de documento *') }}</label>
                            <div class="col-md-12">
                                <select name="per_tipo_documento" id="per_tipo_documento" class="form-select">
                                    <option selected>---- SELECCIONE ----</option>
                                    <option value="T.I">Tarjeta de identidad</option>
                                    <option value="C.C">Cédula de ciudadania</option>
                                    <option value="C.E">Cédula de extranjeria</option>
                                </select>
                                @error('per_tipo_documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Número de documento-->
                        <div class="row mb-3">
                            <label for="per_numero_documento" class="col-md-12 col-form-label text-md-right">{{ __('Número de documento *') }}</label>
                            <div class="col-md-12">
                                <input id="per_numero_documento" type="number" class="form-control @error('per_numero_documento') is-invalid @enderror" name="per_numero_documento" value="{{ old('per_numero_documento') }}" required autocomplete="per_numero_documento" autofocus>
                                @error('per_numero_documento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Nombre (s)-->
                        <div class="row mb-3">
                            <label for="per_nombre" class="col-md-12 col-form-label text-md-right">{{ __('Nombre (s) *') }}</label>
                            <div class="col-md-12">
                                <input id="per_nombre" type="text" class="form-control @error('per_nombre') is-invalid @enderror" name="per_nombre" value="{{ old('per_nombre') }}" required autocomplete="per_nombre" autofocus>
                                @error('per_nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Apellido (s)-->
                        <div class="row mb-3">
                            <label for="per_apellido" class="col-md-12 col-form-label text-md-right">{{ __('Apellido (s) *') }}</label>
                            <div class="col-md-12">
                                <input id="per_apellido" type="text" class="form-control @error('per_apellido') is-invalid @enderror" name="per_apellido" value="{{ old('per_apellido') }}" required autocomplete="per_apellido" autofocus>
                                @error('per_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Telefono 1-->
                        <div class="row mb-3">
                            <label for="per_telefono1" class="col-md-12 col-form-label text-md-right">{{ __('Telefono 1 *') }}</label>
                            <div class="col-md-12">
                                <input id="per_telefono1" type="number" class="form-control @error('per_telefono1') is-invalid @enderror" name="per_telefono1" value="{{ old('per_telefono1') }}" required autocomplete="per_telefono1" autofocus>
                                @error('per_telefono1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Telefono 2-->
                        <div class="row mb-3">
                            <label for="per_telefono2" class="col-md-12 col-form-label text-md-right">{{ __('Telefono 2 (opcional)') }}</label>
                            <div class="col-md-12">
                                <input id="per_telefono2" type="number" class="form-control @error('per_telefono2') is-invalid @enderror" name="per_telefono2" value="{{ old('per_telefono2') }}" autocomplete="per_telefono2" autofocus>
                                @error('per_telefono2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Direccion-->
                        <div class="row mb-3">
                            <label for="per_direccion" class="col-md-12 col-form-label text-md-right">{{ __('Dirección *') }}</label>
                            <div class="col-md-12">
                                <input id="per_direccion" type="text" class="form-control @error('per_direccion') is-invalid @enderror" name="per_direccion" value="{{ old('per_direccion') }}" required autocomplete="per_direccion" autofocus>
                                @error('per_direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Correo electronico-->
                        <div class="row mb-3">
                            <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('Correo electronico *') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Contrasena-->
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña *') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Confirmar contraseña-->
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña *') }}</label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <!--Departamento-->
                        <div class="row mb-3">
                            <label for="per_id_departamento" class="col-md-12 col-form-label text-md-right">{{ __('Departamento *') }}</label>
                            <div class="col-md-12">
                                <select name="per_id_departamento" id="per_id_departamento" class="form-select">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($departamentos as $departamento)
                                        <option value="{{$departamento->id}}">{{$departamento->dep_nombre}}</option>
                                    @endforeach
                                </select>
                                @error('per_id_departamento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Municipio-->
                        <div class="row mb-3">
                            <label for="per_id_municipio" class="col-md-12 col-form-label text-md-right">{{ __('Municipio *') }}</label>
                            <div class="col-md-12">
                                <select name="per_id_municipio" id="per_id_municipio" class="form-select">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{$municipio->id}}">{{$municipio->mun_nombre}}</option>
                                    @endforeach
                                </select>
                                @error('per_id_municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--Fecha de nacimiento-->
                        <div class="row mb-3">
                            <label for="per_fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento *') }}</label>
                            <div class="col-md-12">
                                <input id="per_fecha_nacimiento" type="date" class="form-control" name="per_fecha_nacimiento" value="{{ old('per_fecha_nacimiento') }}" required autocomplete="per_fecha_nacimiento">
                            </div>
                        </div>
                        <!--Rol-->
                        <div class="row mb-3">
                            <label for="per_rol" class="col-md-12 col-form-label text-md-right">{{ __('Rol *') }}</label>
                            <div class="col-md-12">
                                <select name="per_rol" id="per_rol" class="form-select">
                                    <option selected>---- SELECCIONE ----</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->rol_nombre}}</option>
                                    @endforeach
                                </select>
                                @error('per_id_municipio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
