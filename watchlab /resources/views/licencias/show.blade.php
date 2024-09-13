@extends('adminlte::page')

@section('title', 'Inventario')

@section('content_header')
    <h1>Licencias</h1>
@stop

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="post" action="{{ URL::to('licencias/' . $licencia->id) }}" onsubmit="return confirm('¿Desea modificar la licencia?');">
                            @csrf 
                            <input type="hidden" name="_method" value="put">
                            
                            <div class="form-group row">
                                <label for="software" class="col-lg-2 col-form-label">Software</label>
                                <div class="col-lg-4">
                                    <input type="text" name="software" id="software" class="form-control" value="{{ $licencia->software }}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="numero_licencia" class="col-lg-2 col-form-label">Número de Licencia</label>
                                <div class="col-lg-4">
                                    <input type="text" name="numero_licencia" id="numero_licencia" class="form-control" value="{{ $licencia->numero_licencia }}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="fecha_adquisicion" class="col-lg-2 col-form-label">Fecha de Adquisición</label>
                                <div class="col-lg-4">
                                    <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" class="form-control" value="{{ $licencia->fecha_adquisicion }}">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="fecha_expiracion" class="col-lg-2 col-form-label">Fecha de Expiración</label>
                                <div class="col-lg-4">
                                    <input type="date" name="fecha_expiracion" id="fecha_expiracion" class="form-control" value="{{ $licencia->fecha_expiracion }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="equipos" class="col-lg-2 col-form-label">Equipos</label>
                                <div class="col-lg-4">
                                    <select name="equipos[]" id="equipos" class="form-control" multiple>
                                        @foreach($equipos as $equipo)
                                            <option value="{{ $equipo->id }}" 
                                                @if($licencia->equipos->contains($equipo->id)) selected @endif>
                                                {{ $equipo->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
