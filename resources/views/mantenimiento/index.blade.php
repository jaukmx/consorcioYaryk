@extends('layouts.plantilla')

<div class='container px-4 py-5'>
    <h1 class="pb-2 border-bottom">Mantenimiento</h1>
    <div class="row">

    @foreach ($mantenimientos as $mantenimiento)

            <div class="col-md-4 px-4 py-5">
                <h3>{{$mantenimiento->titulo}}</h3>
                <br>
                <img src="{{ asset('/storage').'/'.$mantenimiento->imagen }}" width="300">
                <br>
                <br>
                Descripcion: {{$mantenimiento->descripcion}}
                <br>
            </div>

        @endforeach
    </div>
    <br>





</div>
<br>
