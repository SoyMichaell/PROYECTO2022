@extends('layouts.app')

@section('content')
    <div class="fondo">
        <div class="container">
            <div class="col-md-12 p-4">
                <h2><i class="fas fa-cogs"></i> Configuración</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo consequatur fuga, minus laudantium illum error. Animi architecto eveniet suscipit explicabo accusantium ex commodi nostrum inventore in fuga, corrupti pariatur esse?</p>
            </div>
        </div>
    </div>
    <div class="slot"></div>
    <div class="container content-config">
        <div class="row mx-auto text-center">
            <a class="card-menu shadow-sm p-3" href="{{url('estadoprograma')}}">
                <h3 class="card-menu-title"><i class="fas fa-toggle-on"></i> Estado del programa</h3>
            </a>
            <a class="card-menu shadow-sm p-3" href="{{url('departamento')}}">
                <h3 class="card-menu-title"><i class="fas fa-city"></i> Departamento</h3>
            </a>
            <a class="card-menu shadow-sm p-3" href="{{url('municipio')}}">
                <h3 class="card-menu-title"><i class="fas fa-building"></i> Municipio</h3>
            </a>
            <a class="card-menu shadow-sm p-3" href="{{url('facultad')}}">
                <h3 class="card-menu-title"><i class="fas fa-university"></i> Facultad</h3>
            </a>
            <a class="card-menu shadow-sm p-3" href="{{url('nivelformacion')}}">
                <h3 class="card-menu-title"><i class="fab fa-accusoft"></i> Nivel Formación</h3>
            </a>
            <a class="card-menu shadow-sm p-3" href="{{url('metodologia')}}">
                <h3 class="card-menu-title"><i class="fab fa-buffer"></i> Metodologia</h3>
            </a>
        </div>
    </div>
@endsection