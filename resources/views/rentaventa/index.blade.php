@extends('layouts.plantilla')

<div class='container px-4 py-5'>
    <h1 class="pb-2 border-bottom">Equipo en Renta</h1>
    <div class="row">

    @foreach ($rentaventas as $rentaventa)
         @if( $rentaventa->type == 1 )
            <div class="col-md-4 px-4 py-5">
                <h3>{{$rentaventa->titulo}}</h3>
                <br>
                <img src="{{ asset('/storage').'/'.$rentaventa->imagen }}" width="300">
                <br>
                <br>
                Descripcion: {{$rentaventa->descripcion}}
                <br>
            </div>
        @endif
        @endforeach
    </div>
    <br>

    <h1>Equipo en Venta</h1>
    <div class="row">

    @foreach ($rentaventas as $rentaventa)

         @if( $rentaventa->type == 2 )
            <div class="col-md-4 px-4 py-5">
                <h3>{{$rentaventa->titulo}}</h3>
                <br>
                <img src="{{ asset('/storage').'/'.$rentaventa->imagen }}" width="300">
                <br>
                <br>
                Descripcion: {{$rentaventa->descripcion}}
                <br>
            </div>
        @endif
        @endforeach
    </div>
    <br>

</div>
