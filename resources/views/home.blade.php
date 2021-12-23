@extends('layouts.app')

@section('content')
    <div class="fondo">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <p><small>Dashboard</small></p>
                    <h2 class="fw-bold">Bienvenido (a): {{ Auth::user()->per_nombre }} {{Auth::user()->per_apellido}}</h2>
                    <p>Plataforma de gestión y control de información de procesos academicos y administrativos del programa Ingenieria de Sistemas.</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid d-block" src="{{asset('image/home.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <div class="slot"></div>
    <div class="container">
        <div class="row mx-auto text-center">
            <a class="card-menu rounded shadow-sm p-3" href="{{url('configuracion')}}">
                <h3 class="card-menu-title"><i class="fas fa-cogs"></i> Configuración</h3>
            </a>
            <a class="card-menu rounded shadow-sm p-3" href="{{url('programa')}}">
                <h3 class="card-menu-title"><i class="fab fa-uncharted"></i> Programas</h3>
            </a>
        </div>
    </div>
@endsection
