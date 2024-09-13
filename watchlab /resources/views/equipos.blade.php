@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Equipos</h1>
                    <!-- Formulario de búsqueda -->
                    <form method="GET" action="{{ URL::to('equipos') }}" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Buscar equipos" value="{{ request()->get('search') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            @stop
            @section('content')
                <p>Bienvenido a Equipos de WatchLab.</p>
                <a href="{{ URL::to('equipos/create')}}" class="btn btn-success mb-1">Añadir equipo</a>
                

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Número de Serie</th>
                            <th>Modelo</th>
                            <th>Fecha Adquisición</th>
                            <th>Estado</th>
                            <th>Ubicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipos as $item)
                        <tr>
                        <td> {{$item->id}}</td>
                        <td> {{$item->nombre}}</td>
                        <td> {{$item->tipo}}</td>
                        <td> {{$item->marca}}</td>
                        <td> {{$item->numero_serie}}</td>
                        <td> {{$item->modelo}}</td>
                        <td> {{$item->fecha_adquisicion}}</td>
                        <td> {{$item->estado}}</td>
                        <td> {{$item->ubicacion}}</td>
                            <td>
                                <a href="{{ URL::to('equipos/' . $item->id)}}" class="btn btn-primary">Ver equipo</a> 
                                <form method="post" action="{{ URL::to('equipos/' . $item->id)}}" style="display:inline;" onsubmit="return confirm('¿Desea eliminar el equipo?');">
                                    @csrf
                                    <input type="hidden" name = "_method" value ="delete">
                                    <button type="submit" class="btn btn-danger mt-1">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            @stop
        </div>
    </div>
</div>

<script>    
function validate(form) {

if(!valid) {
    alert('Please correct the errors in the form!');
    return false;
}
else {
    return confirm('Do you really want to submit the form?');
}
}
</script>
<form onsubmit="return validate(this);">
