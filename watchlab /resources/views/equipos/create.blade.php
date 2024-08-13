
@extends('adminlte::page')

@section('title', 'Inventario')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <h1>Equipos</h1>
            @stop
            @section('content')
               
               <form class="form-horizontal" method="post" action="{{URL::to('equipos')}}">
               @csrf 
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Nombre
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="nombre" class="form-control">
                       </div>
                   </div>
                   <div class="form-group row">
                       <div class="col-lg-2">
                           Tipo
                       </div>
                       <div class="col-lg-4">
                           <input type="text" name="tipo" class="form-control">
                       </div>
                   </div>
                   
                   <div class="form-group row">
                       <div class="col-lg-2">
                           <button type="submit" class="btn btn-secondary">Crear</button>
                       </div>
                      
                   </div>
                   
                   
               </form>
            @stop
        </div>
    </div>
</div>
