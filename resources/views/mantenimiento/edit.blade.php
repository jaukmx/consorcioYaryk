<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>

<br>

@include('layouts.validationForm')

<div class="container">
    <form class="needs-validation" action="{{ url('/mantenimiento/'.$mantenimiento->id) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" value="{{ $mantenimiento->titulo}}" class="form-control" name ="titulo" id="titulo" placeholder="Titulo de la obra" required>
          </div>



          <div class="input-group mb-3">
            <img src="{{ asset('storage').'/'.$mantenimiento->imagen }}" width="200">
            <br>
            <input type="file" class="form-control" name="imagen" id="validatedCustomFile" for="validatedCustomFile" style="    width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;" >
          </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" value="{{ $mantenimiento->descripcion}}" name="descripcion" id="descripcion" rows="3" required>{{ $mantenimiento->descripcion}}</textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar" style="background-color: #0d6efd;">
      </form>
</div>
</x-app-layout>
