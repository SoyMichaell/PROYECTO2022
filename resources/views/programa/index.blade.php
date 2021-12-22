@extends('layouts.app')

@section('content')
    <div class="fondo">
        <div class="container p-3">
            <h3><i class="fab fa-uncharted"></i> Programas / inico</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse nemo tenetur non cum aliquam quasi
                quaerat
                quas quo blanditiis repellendus saepe error natus, totam nihil asperiores aspernatur soluta
                laborum officia.
            </p>
        </div>
    </div>
    <div class="slot"></div>
    <div class="container">
        <div class="col-md-12 shadow-sm p-3 bg-white">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Lista de registros</h3>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end align-items-center">
                        <a class="btn btn-primary btn-sm space-btn" href="{{ url('programa/create') }}"><i
                                class="fas fa-plus-circle"></i>
                            Nuevo</a>
                        <a class="btn btn-info btn-sm btn-eye" href="{{url('programa/pdf')}}" title="Generar reporte pdf" target="__blank"><i class="fas fa-file-pdf"></i></a>
                        <a class="btn btn-info btn-sm btn-eye" href="#" title="Generar reporte excel" target="__blank"><i class="fas fa-file-excel"></i></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="display mt-4 p-3" id="tables">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Programa</th>
                                <th>Titulo</th>
                                <th>Codigo SNIES</th>
                                <th>Nivel de formación</th>
                                <th>Creditos</th>
                                <th>Director de programa</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($programas as $programa)
                                <tr>
                                    <td>{{ $i++;}}</td>
                                    <td>{{ $programa->pro_nombre }}</td>
                                    <td>{{ $programa->pro_titulo }}</td>
                                    <td>{{ $programa->pro_codigosnies }}</td>
                                    <td>{{ $programa->pro_nivel_formacion }}</td>
                                    <td>{{ $programa->pro_creditos }}</td>
                                    <td>{{ $programa->pro_director_programa }}</td>
                                    <td>
                                        <form action="{{ route('programa.destroy', $programa->id) }}"
                                            method="POST">
                                            <div class="d-flex">
                                                <a class="btn btn-eye btn-sm btn-eye" href="/programa/{{$programa->id}}"><i class="fas fa-folder"></i></a>
                                                <a class="btn btn-primary btn-sm btn-eye"
                                                    href="/programa/{{ $programa->id }}/edit"><i
                                                        class="fas fa-sync-alt"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-eye"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection