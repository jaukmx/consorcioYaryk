<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>

<br>
@include('layouts.validationForm')
<br>
<div class='container'>

    <form class="needs-validation" action="{{ url('/clientes') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nombre de la empresa.</label>
            <input type="text" class="form-control" name ="titulo" id="titulo" placeholder="Nombre de la empresa"  required>
            <div class="invalid-feedback">Falta el nombre de la empresa</div>
        </div>
          <div class="input-group mb-3">

            <input type="file" class="form-control" name="imagen"  style="padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;" required>
            <div class="invalid-feedback">Falta una imagen.</div>
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Enlace web de la empresa</label>
            <input type="text" class="form-control" name ="enlace" id="titulo" placeholder="www.empresa.com" required>
            <div class="invalid-feedback">Falta la direccion web de la empresa.</div>
          </div>

          <button class="btn btn-primary" type="submit" style="background-color: #0d6efd;">Guardar</button>
      </form>
<br>
<div class="row">
    <h2>Lista de clientes</h2>
    @foreach ($clientes as $cliente)

            <div class="col-md-4 px-4 py-5">

                <h3>{{$cliente->titulo}}</h3>
                <br>
                <img src="{{ asset('/storage').'/'.$cliente->imagen }}" width="300">
                <br>

            <form action=" {{ url( '/clientes/'.$cliente->id ) }} "  method="post">
                @csrf
                {{ method_field('DELETE') }}
                <a class="btn btn-primary" href="{{ url('/clientes/'.$cliente->id.'/edit') }}" style="background-color: #0d6efd;">
                    editar
                </a>
                <input type="submit"  class="btn btn-outline-danger" onclick="return confirm('¿Quiere borrar?')"  value="Borrar">
            </form>
                </div>

        @endforeach
    </div>

</div>
</x-app-layout>
