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

    <p class="h2"> Datos de contacto</p>

    <div class="row">

    @foreach ($contactos as $contacto)
            @if ( $contacto->nombre == "" )
                <form class="needs-validation" action="{{ url('/contacto') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre del contacto.</label>
                        <input type="text" class="form-control" name ="nombre" id="titulo" placeholder="Nombre del contacto" required>
                        <div class="invalid-feedback">Falta nombre del contacto.</div>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Correo</label>
                        <input type="emaill" class="form-control" name ="correo" id="titulo" placeholder="ejemplo@email.com" required>
                        <div class="invalid-feedback">Falta direccion de correo electronico.</div>
                    </div>


                    <input class="btn btn-primary" type="submit" value="Guardar" style="background-color: #0d6efd;">
                </form>
            <br>
            @else
                <div class="col-md-6 px-4 py-5">
                    <p class="h5">Nombre de contacto: {{$contacto->nombre}}</p>
                    <br>
                    <p class="h5">Correo Electronico: {{$contacto->correo}}</p>
                    <br>
                </div>
            @endif
        @endforeach
    </div>
    <br>
</div>

</x-app-layout>
