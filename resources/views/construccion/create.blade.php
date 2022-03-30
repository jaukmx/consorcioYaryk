<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>

<br>
<div class="container">

    @include('construccion.formModal')

    <div class="row">
        <p class="h1">Obras</p>

        @foreach ($construccions as $construccion)
             @if( $construccion->type == 1 )

                <div class="col-md-4 px-4 py-5">
                    <p class="h3">{{$construccion->titulo}}</p>

                    <br>
                <img src="{{ asset('storage').'/'.$construccion->imagen }}" width="300">
                    <br>
                    Descripcion:  {{$construccion->descripcion}}
                    <br>

                <div>
                <form action=" {{ url( '/construccion/'.$construccion->id ) }} "  method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <a type="button" class="btn btn-primary" href="{{ url('/construccion/'.$construccion->id.'/edit') }}" style="background-color: #0d6efd;">
                        editar
                </a>
                    <button  class="btn btn-outline-danger" type="submit"  onclick="return confirm('¿Quiere borrar?')"  value="Borrar" >Borrar</button>
                </form>
                </div>



            </div>
            @endif
            @endforeach
    </div>

    <div class="row">
        <p class="h1">Remodelaciones</p>

        @foreach ($construccions as $construccion)
             @if( $construccion->type == 2 )

                <div class="col-md-4 px-4 py-5">
                    <p class="h3">{{$construccion->titulo}}</p>

                    <br>
                <img src="{{ asset('storage').'/'.$construccion->imagen }}" width="300">
                    <br>
                    Descripcion:  {{$construccion->descripcion}}
                    <br>

                    <div>
                        <form action=" {{ url( '/construccion/'.$construccion->id ) }} "  method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <a type="button" class="btn btn-primary" href="{{ url('/construccion/'.$construccion->id.'/edit') }}" style="background-color: #0d6efd;">
                                editar
                        </a>
                            <button  class="btn btn-outline-danger" type="submit"  onclick="return confirm('¿Quiere borrar?')"  value="Borrar" >Borrar</button>
                        </form>
                        </div>



            </div>
            @endif
            @endforeach
    </div>



</div>
<br>





</x-app-layout>
