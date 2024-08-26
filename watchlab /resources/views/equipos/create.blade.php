
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
  this.submit();
}
</script>