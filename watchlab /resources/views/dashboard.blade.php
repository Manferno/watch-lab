@extends('adminlte::page')

@section('title', 'Dashboard')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @section('content_header')
                <h1>Dashboard</h1>
            @stop
            @section('content')
                <p>Bienvenido al dashboard de WatchLab.</p>
    <div class="row">
        <div class="col-lg-4">

            <x-adminlte-small-box title="Laboratorio" text="Alfa" icon="fas fa-desktop text-dark" theme="teal" url="#" url-text="Ver detalles"/>

        </div>

        <div class="col-lg-4">

            <x-adminlte-small-box title="Laboratorio" text="Lambda" icon="fas fa-desktop text-dark" theme="lightblue" url="#" url-text="Ver detalles"/>
        
        </div>
        <div class="col-lg-4">
        
            <x-adminlte-small-box title="Laboratorio" text="Epsilon" icon="fas fa-desktop text-dark" theme="info" url="#" url-text="Ver detalles"/>
    
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <x-adminlte-card title="Estado de los Equipos" theme="purple" icon="fas fa-chart-pie"  >
                A removable and collapsible card with purple theme...
            </x-adminlte-card>
        </div>
        <div class="col-lg-6">
            <x-adminlte-card title="Tipo de Equipos" theme="purple" icon="far fa-chart-bar"  >
                <div style="width: 800px;"><canvas id="acquisitions"></canvas></div>
            </x-adminlte-card>
        </div>
    </div>


    <script type="module" src="/src/acquisitions.js"></script>
            @stop
        </div>
    </div>
</div>
