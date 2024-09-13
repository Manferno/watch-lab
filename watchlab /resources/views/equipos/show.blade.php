
@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <h1>Equipos</h1>
            @stop
            @section('content')
               
               <form class="form-horizontal" method="post" action="{{URL::to('equipos/' . $item->id)}}" onsubmit="return confirm('¿Desea modificar el equipo?');">
               @csrf 
               <input type="hidden" name = "_method" value ="put">
               <input type="hidden" name = "_method" value ="put">
                   <div class="form-group row">
                   <div class="col-lg-2">
                           Nombre
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="nombre" id="nombre" class="form-control" value="{{$item->nombre}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Tipo
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="tipo" id="tipo" class="form-control" value="{{$item->tipo}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Marca
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="marca" id="marca" class="form-control" value="{{$item->marca}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Número de Serie
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="numero_serie" id="numero_serie" class="form-control" value="{{$item->numero_serie}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Modelo
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="modelo" id="modelo" class="form-control" value="{{$item->modelo}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Fecha Adquisición
                       </div>
                       <div class="col-lg-4">
                           <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" class="form-control" value="{{$item->fecha_adquisicion}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Estado
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="estado" id="estado" class="form-control" value="{{$item->estado}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Ubicación
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{$item->ubicacion}}">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           <button type="submit" class="btn btn-warning">Modificar</button>
                       </div>
                   </div>
                   
               </form>
                <div class="col-lg-2">       
                    <a href="<?=$_SERVER["HTTP_REFERER"]?>" class="btn btn-secondary">Volver</a>
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
