
@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <h1>Equipos</h1>
            @stop
            @section('content')
               
               <form class="form-horizontal" method="post" id="formulario-crear" action="{{URL::to('equipos')}}">
               @csrf 
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Nombre
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="nombre" id="nombre" class="form-control">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Tipo
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="tipo" id="tipo" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Marca
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="marca" id="marca" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Número de Serie
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="numero_serie" id="numero_serie" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Modelo
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="modelo" id="modelo" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Fecha Adquisición
                       </div>
                       <div class="col-lg-4">
                           <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Estado
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="estado" id="estado" class="form-control">
                       </div>
                   </div>

                   <div class="form-group row">
                       <div class="col-lg-2">
                           Ubicación
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="ubicacion" id="ubicacion" class="form-control">
                       </div>
                   </div>
                   
                   <div class="form-group row">
                       <div class="col-lg-2">
                           <button type="submit" class="btn btn-success">Crear</button>
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
  var nombre = document.getElementById('nombre').value;
  if(nombre.length == 0) {
    alert('No has escrito nada en el nombre');
    return;
  }
  var tipo = document.getElementById('tipo').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en el Tipo');
    return;
  }
  var tipo = document.getElementById('marca').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en el Marca');
    return;
  }
  var tipo = document.getElementById('numero_serie').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en el Número de Serie');
    return;
  }
  var tipo = document.getElementById('modelo').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en el Modelo');
    return;
  }
  var tipo = document.getElementById('fecha_adquisicion').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en la Fecha de adquisición');
    return;
  }
  var tipo = document.getElementById('estado').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en el Estado');
    return;
  }
  var tipo = document.getElementById('ubicacion').value;
  if (tipo.length == 0) {
    alert('No has escrito nada en el Ubicación');
    return;
  }
  this.submit();
}
</script>