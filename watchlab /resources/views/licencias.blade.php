@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Licencias</h1>
                    <!-- Formulario de búsqueda -->
                    <form method="GET" action="{{ URL::to('licencias') }}" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Buscar licencias" value="{{ request()->get('search') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            @stop
            @section('content')
                <p>Bienvenido a Licencias de WatchLab.</p>
                <a href="{{ URL::to('licencias/create')}}" class="btn btn-success mb-1">Añadir licencia</a>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>SOFTWARE</th>
                            <th>NÚMERO DE LICENCIA</th>
                            <th>FECHA DE ADQUISICIÓN</th>
                            <th>FECHA DE EXPIRACIÓN</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($licencias as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->software}}</td>
                            <td> {{$item->numero_licencia}}</td>
                            <td> {{$item->fecha_adquisicion}}</td>
                            <td> {{$item->fecha_expiracion}}</td>
                            <td>
                                <a href="{{ URL::to('licencias/' . $item->id)}}" class="btn btn-primary">Ver Detalles</a>
                                <form action="{{ URL::to('licencias/' . $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Desea eliminar la licencia?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
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
