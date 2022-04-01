<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>

@include('layouts.validationForm')
<br>
<div class="container">
    <form class="needs-validation" action="{{ url('/construccion/'.$construccion->id) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" value="{{ $construccion->titulo}}" class="form-control" name ="titulo" id="titulo" placeholder="Titulo de la obra" required>
            <div class="invalid-feedback">Falta el titulo</div>
        </div>



          <div class="input-group mb-3">
            <img src="{{ asset('storage').'/'.$construccion->imagen }}" width="200">
            <input class="form-control " type="file" accept="image/*" multiple class="form-control" id="validatedCustomFile" name="imagen" style="    width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            -webkit-appearance: none;" >
            <div class="invalid-feedback">Falta un archivo</div>
          </div>

          <div class="input-group">
            <select class="form-select" value="" name="type" aria-label="Default select example" required>
                <option value="">Seleciones obra o  remodelación</option>
                <option value="1" {{ $construccion->type == 1 ? 'selected' : '' }}>Obra</option>
                <option value="2" {{ $construccion->type == 2 ? 'selected' : '' }}>Remodelación</option>

              </select>
            <div class="invalid-feedback">Seleccione una opción</div>
          </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" value="{{ $construccion->descripcion}}" name="descripcion" id="descripcion" rows="3" required>{{ $construccion->descripcion}}</textarea>
            <div class="invalid-feedback">Falta la descripción.</div>
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar" style="background-color: #0d6efd;">
      </form>
</div>

</x-app-layout>
