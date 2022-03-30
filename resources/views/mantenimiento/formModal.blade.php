
@include('layouts.validationForm')

<form class="needs-validation" action="{{ url('/mantenimiento') }}" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="mb-3">
        <label for="validationCustom01" class="form-label">Titulo</label>
        <input type="text" class="form-control" name ="titulo"  id="validationCustom01" placeholder="Titulo de la obra" required>
        <div class="invalid-feedback">Falta un el titulo</div>
    </div>

    <div class="input-group mb-3">

        <input type="file" class="form-control" name="imagen" id="validatedCustomFile" for="validatedCustomFile" style="    width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;" required>
        <div class="invalid-feedback">Falta un archivo</div>
    </div>

    <div class="mb-3">
        <label for="validationCustom02" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="validationCustom02" rows="3" required></textarea>
        <div class="invalid-feedback">Seleccione una opción</div>
    </div>
    <button class="btn btn-primary" type="submit" style="background-color: #0d6efd;">Guardar</button>
    </form>

