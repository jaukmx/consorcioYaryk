@extends('layouts.plantilla')

@section('contenido')

<div class='container px-4 py-5'>
    <h2 class="pb-2 border-bottom">Clientes</h2>
    <div class="row">

        @foreach ($clientes as $cliente)

                <div class="col-md-4 px-4 py-5">
                    <h3>{{$cliente->titulo}}</h3>
                    <br>
                    <img src="{{ asset('/storage').'/'.$cliente->imagen }}" width="300">
                    <br>
                    </div>

            @endforeach
        </div>
</div>

@endsection
