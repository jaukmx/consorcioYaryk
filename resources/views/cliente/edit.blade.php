<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>
<br>

@include('layouts.validationForm')

<div class='container px-4 py-5'>

    <form class="needs-validation" action="{{ url('/clientes/'.$cliente->id) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" class="form-control" value="{{$cliente->titulo}}" name ="titulo" id="titulo" placeholder="Nombre de la empresa" required>
            <div class="invalid-feedback">Falta nombre de la empresa</div>
          </div>
          <img src="{{ asset('storage').'/'.$cliente->imagen }}" width="200">
          <br>
          <div class="input-group mb-3">

            <input type="file" class="form-control" name="imagen" id="imagen"  style="width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Enlace web de la empresa</label>
            <input type="text" class="form-control"  value="{{$cliente->enlace }}" name ="enlace" id="titulo" placeholder="www.empresa.com" required>
            <div class="invalid-feedback">Falta direccion web de la empresa</div>
          </div>

        <input type="submit" class="btn btn-primary" value="Guardar" style="background-color: #0d6efd;">
      </form>
<br>


</div>
</x-app-layout>
