<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>

<br>

<div class='container'>

@include('layouts.validationForm')


    <form class="needs-validation" action="{{ url('/renta-venta') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" class="form-control" name ="titulo" id="titulo" placeholder="Nombre de la empresa" required>
            <div class="invalid-feedback">Falta un titulo</div>
        </div>
        <div class="input-group mb-3">

            <input  type="file" accept="image/*" multiple class=" form-control" name="imagen" id="imagen" style="width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;" required>
            <div class="invalid-feedback">Falta la imagen</div>
        </div>
        <div class="input-group">
            <select class="form-select" name="type" aria-label="Default select example" required>
                <option value="">Seleciones renta o venta</option>
                <option value="1">Renta</option>
                <option value="2">Venta</option>

            </select>
            <div class="invalid-feedback">Seleccione una opción</div>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3" required></textarea>
            <div class="invalid-feedback">Falta una descripción.</div>
        </div>
        <button class="btn btn-primary" type="submit" style="background-color: #0d6efd;">Guardar</button>

      </form>
    <br>
    <h1>Equipo en Renta</h1>
    <div class="row">

    @foreach ($rentaventas as $rentaventa)
         @if( $rentaventa->type == 1 )
            <div class="col-md-4 px-4 py-5">
                <p class="h3">{{$rentaventa->titulo}}</p>

                <br>
                <img src="{{ asset('/storage').'/'.$rentaventa->imagen }}" width="300">
                <br>
                <br>
                Descripcion: {{$rentaventa->descripcion}}
                <br>

                <form action=" {{ url( '/renta-venta/'.$rentaventa->id ) }} "  method="post">
                @csrf
                {{ method_field('DELETE') }}
                <a class="btn btn-primary" href="{{ url('/renta-venta/'.$rentaventa->id.'/edit') }}">
                    editar
                </a>
                <input class="btn btn-outline-danger" type="submit"  onclick="return confirm('¿Quiere borrar?')"  value="Borrar">
            </form>
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
                <a class="btn btn-primary" href="{{ url('/renta-venta/'.$rentaventa->id.'/edit') }}">
                    editar
                </a>
                <input class="btn btn-outline-danger" type="submit"  onclick="return confirm('¿Quiere borrar?')"  value="Borrar">
            </form>
            </div>

        @endif

        @endforeach
    </div>
    <br>

</div>

</x-app-layout>
