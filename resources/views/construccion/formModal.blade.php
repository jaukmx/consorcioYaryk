@include('layouts.validationForm')
            <form class="needs-validation" action="{{ url('/construccion') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="validationCustom01" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name ="titulo" id="validationCustom01" placeholder="Titulo de la obra" required>
                    <div class="invalid-feedback">Falta un el titulo</div>
                </div >

                  <div class="input-group mb-3">

                    <input class="form-control " type="file" accept="image/*" multiple class="form-control" id="validatedCustomFile" name="imagen" style="    width: 100%;
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
                    <select class="form-control" name="type"  required>
                        <option value="">Seleciones obra o  remodelación</option>
                        <option value="1">Obra</option>
                        <option value="2">Remodelación</option>

                      </select>
                      <div class="invalid-feedback">Seleccione una opción</div>
                  </div>

                <div class="mb-3">
                    <label for="validationCustom04" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="validationCustom04" rows="3 " required></textarea>
                    <div class="invalid-feedback">Falta la descripcion.</div>
                </div>
                <input class="btn btn-primary" type="submit" value="Guardar" style="background-color: #0d6efd;">
              </form>
              <br>
<!----   ------------------------------------------------------>


