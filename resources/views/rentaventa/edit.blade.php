<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           <!-- -->
            Construccion.
        </h2>
    </x-slot>
<br>
<div class="container">
    <form action="{{ url('/renta-venta/'.$rentaventa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" value="{{ $rentaventa->titulo}}" class="form-control" name ="titulo" id="titulo" placeholder="Titulo de la obra">
          </div>


          <img src="{{ asset('storage').'/'.$rentaventa->imagen }}" width="200">
          <br>
          <div class="input-group mb-3">

            <input type="file" value="" class="form-control" name="imagen" id="imagen" style="    width: 100%;
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
            <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
            <textarea class="form-control" value="{{ $rentaventa->descripcion}}" name="descripcion" id="descripcion" rows="3">{{ $rentaventa->descripcion}}</textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar" style="background-color: #0d6efd;">
      </form>
      <br>
</div>
</x-app-layout>
