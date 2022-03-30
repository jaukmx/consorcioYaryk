<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Carousel Template · Bootstrap v5.1</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



        <!-- Bootstrap core CSS -->


        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>


        <!-- Custom styles for this template -->
        <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>

    <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="Twelfth navbar example">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/construccion/create">Construcción</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/mantenimiento/create">Mantenimiento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/renta-venta/create">Renta y Venta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes/create">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contacto/create">Contacto</a>
                </li>


                </ul>
            </div>
            </div>
        </nav>
    </header>

    <main>

        <!---CONTENIDO--->
        @yield('contenido')

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2022 Jose Arturo Uc Garcia. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y condiciones</a></p>
    </footer>
    </main>





  </body>
</html>
