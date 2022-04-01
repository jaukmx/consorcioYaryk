<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>

<br>
<div class="container">

    @include('mantenimiento.formModal')
    <br>
    <div class="row">
        <p class="h1">Mantenimiento</p>
        @foreach ($mantenimientos as $mantenimiento)

            <div class="col-md-4 px-4 py-5">
                <p class="h3">{{$mantenimiento->titulo}}</p>

                <br>
               <img src="{{ asset('storage').'/'.$mantenimiento->imagen }}" width="300">
                <br>
                Descripcion:  {{$mantenimiento->descripcion}}
                <br>


            <form action=" {{ url( '/mantenimiento/'.$mantenimiento->id ) }} "  method="post">
                @csrf
                {{ method_field('DELETE') }}
                <br>
                <a  type="button" class="btn btn-primary" href="{{ url('/mantenimiento/'.$mantenimiento->id.'/edit') }}" style="background-color: #0d6efd;">
                    editar
                </a>
                <input class="btn btn-outline-danger" type="submit" accept="image/*" multiple  onclick="return confirm('¿Quiere borrar?')"  value="Borrar">
            </form>


            </div>

            @endforeach
    </div>
</div>
<br>


</x-app-layout>
