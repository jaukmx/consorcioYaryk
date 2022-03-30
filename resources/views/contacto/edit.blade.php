@extends('layouts.plantilla-admin')



@section('contenido')


@include('layouts.validationForm')

<div class='container px-4 py-5'>

    <form class="needs-validation" action="{{ url('/contacto') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Titulo</label>
            <input type="text" class="form-control" name ="nombre" id="titulo" placeholder="Nombre de la empresa" required>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Correo</label>
            <input type="emaill" class="form-control" name ="correo" id="titulo" placeholder="ejemplo@email.com" required>
        </div>


        <input type="submit" class="btn btn-primary">
      </form>
    <br>
    <h1>Contacto</h1>


    <br>

</div>

@endsection
