

@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <h1>Licencias</h1>
            @stop
            @section('content')
               
               <form class="form-horizontal" method="post" id="formulario-crear" action="{{URL::to('licencias')}}">
               @csrf 
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Software
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="software" id="software" class="form-control">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Número de Licencia
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="numero_licencia" id="numero_licencia" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Fecha de Adquisición
                       </div>
                       <div class="col-lg-4">
                           <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Fecha de Expiración
                       </div>
                       <div class="col-lg-4">
                           <input type="date" name="fecha_expiracion" id="fecha_expiracion" class="form-control">
                       </div>
                   </div>
                   <div class="form-group row">
                        <label for="equipos" class="col-lg-2 col-form-label">Equipos</label>
                        <div class="col-lg-4">
                            <select name="equipos[]" id="equipos" class="form-control" multiple>
                                @foreach($equipos as $equipo)
                                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                       </div>
                       <div class="col-lg-4">
                           <button type="submit" class="btn btn-primary">Guardar</button>
                       </div>
                   </div>
               </form>
            @stop
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("formulario-crear").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();

  var software = document.getElementById('software').value;
  if (software.length == 0) {
    alert('No has escrito nada en el software');
    return;
  }

  var numero_licencia = document.getElementById('numero_licencia').value;
  if (numero_licencia.length == 0) {
    alert('No has escrito nada en el número de licencia');
    return;
  }

  var fecha_adquisicion = document.getElementById('fecha_adquisicion').value;
  if (fecha_adquisicion.length == 0) {
    alert('No has escrito nada en la fecha de adquisición');
    return;
  }

  var fecha_expiracion = document.getElementById('fecha_expiracion').value;
  if (fecha_expiracion.length == 0) {
    alert('No has escrito nada en la fecha de expiración');
    return;
  }

  this.submit();
}
</script>