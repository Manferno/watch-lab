
@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <h1>Equipos</h1>
            @stop
            @section('content')
                <p>Bienvenido al Equipos de WatchLab.</p>
                <a href="{{ URL::to('equipos/create')}}" class="btn btn-success mb-1">Añadir equipo</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>TIPO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipos as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->nombre}}</td>
                            <td> {{$item->tipo}}</td>
                            <td>  
                                <a href="{{ URL::to('equipos/' . $item->id)}}" class="btn btn-primary">Modificar equipo</a> 
                                <form method="post" action="{{ URL::to('equipos/' . $item->id)}}" onsubmit="return confirm('¿Desea eliminar el equipo?');">
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
