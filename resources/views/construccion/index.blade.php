@extends('layouts.plantilla-admin')

@section('contenido')
<br>
<div class="row">
    @foreach ($contruccions as $construccion)

        <div class="col-md-4 px-4 py-5">
            Titulilo ~ {{$construccion->titulo}}
            <br>
            Imagen  <img src="{{ asset('storage').'/'.$construccion->imagen }}">
            <br>
            Descripcion: ~ {{$construccion->descripcion}}
            <br>

           <a href="{{ url('/construccion/'.$construccion->id.'/edit') }}">
                editar
           </a>
            <form action=" {{ url( '/construccion/'.$construccion->id ) }} "  method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit"  onclick="return confirm('¿Quiere borrar?')"  value="Borrar">
            </form>


        </div>

        @endforeach
    </div>
<br>


@endsection
