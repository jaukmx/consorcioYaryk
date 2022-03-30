@extends('layouts.plantilla')

@section('contenido')
<div class='container px-4 py-5'>
    <h2>Contacto</h2>

        <form class="row g-3 needs-validation" action="{{ url('/contacto') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="col-md-4 ">
                <label for="formGroupExampleInput" class="form-label">Nombres</label>
                <input type="text" class="form-control" name ="titulo" id="titulo" placeholder="" required>
                <div class="invalid-feedback">Se requiere un nombre</div>
            </div>
            <div class="col-md-4 ">
                <label for="formGroupExampleInput" class="form-label">Apellidos.</label>
                <input type="text" class="form-control" name ="titulo" id="titulo" placeholder="" required>
                <div class="invalid-feedback">Se requiere un apellido</div>
            </div>
            <div class="col-md-4 ">
            </div>
            <div class="col-md-4">
                <label for="formGroupExampleInput" class="form-label">Correo electronico</label>
                <input type="text" class="form-control" name ="enlace" id="titulo" placeholder="example@email.com" required>
                <div class="invalid-feedback">Falta la direccion web de la empresa.</div>
            </div>
            <div class="col-12">
            </div>
            <div class="col-8">
                <label for="validationCustom04" class="form-label">Mensaje</label>
                <textarea class="form-control" name="descripcion" id="validationCustom04" rows="3 " required></textarea>
                <div class="invalid-feedback">Falta la descripcion.</div>
            </div>
            <div class="col-12">
            </div>
            <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
          </form>

</div>



@endsection
