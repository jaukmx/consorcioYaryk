@extends('layouts.plantilla')
<br>

<div class='container px-4 py-5'>
    <h1 >Obras</h1>
    <div class="row">

    @foreach ($construccions as $construccion)
         @if( $construccion->type == 1 )
            <div class="col-md-4 px-4 py-5">
                <h3>{{$construccion->titulo}}</h3>
                <br>
                <img class="img-fluid" src="{{ asset('/storage').'/'.$construccion->imagen }}" >
                <br>
                <br>
                Descripcion: {{$construccion->descripcion}}
                <br>
            </div>
        @endif
        @endforeach
    </div>
    <br>
    <h1>Remodelaciones</h1>

    <div class="row">

        @foreach ($construccions as $construccion)

            @if( $construccion->type == 2 )
                <div class="col-md-4 px-4 py-5">
                    <h3>{{$construccion->titulo}}</h3>
                    <br>

                    <img class="img-fluid" src="{{ asset('/storage').'/'.$construccion->imagen }}">
                    <br>
                    <br>
                    Descripcion: {{$construccion->descripcion}}
                    <br>
                </div>

            @endif

            @endforeach
        </div>


</div>
<br>




