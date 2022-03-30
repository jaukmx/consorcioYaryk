@extends('layouts.plantilla')

<!----Contenido-->

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="{{ asset('images/planos1.jpg') }}" class="img-fluid" alt="Responsive image">
        <div class="container">
          <div class="carousel-caption" style="color :black;">
            <h1 class=" featurette-heading c"   > Consorcio Yaryk.</h1>

            <br>
            <br>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/excabadora1.jpg') }}" class="img-fluid" alt="Responsive image">
        <div class="container">
          <div class="carousel-caption">
            <h1 class=" featurette-heading  display-1">Renta y Venta.</h1>
            <br>
            <a class="btn btn-lg btn-primary" href="/renta-venta">Mas</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/planos2.jpg') }}" class="img-fluid" alt="Responsive image">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="text-dark">Servicios de construcción y remodelación.</h1>

            <p><a class="btn btn-lg btn-primary" href="/construccion">>>Construcción</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


   <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" src="{{ asset('images/52.png') }}">
              <h2>Mantenimiento de edificios y locales comerciales.</h2>sss
        <p></p>
        <p><a class="btn btn-secondary" href="#">Mas detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" src="{{ asset('images/62.png') }}">
        <h2>Construcción, edificación y albañilería.</h2>
        <p></p>
        <p><a class="btn btn-secondary" href="#">Mas detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" preserveAspectRatio="xMidYMid slice" focusable="false" src="{{ asset('images/73.png') }}">

        <h2>Renta de maquinaria y equipo</h2>
        <p> </p>
        <p><a class="btn btn-secondary" href="#">Mas detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Construcción. <span class="text-muted">Construimos tus sueños.</span></h2>
        <p class="lead">.</p>
      </div>
      <div class="col-md-5">
        <img  src=" {{ asset('images/Square-laba.jpg') }} " class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Remodelaciones. <span class="text-muted">Remodelaciones en el hogar y empresa.</span></h2>
        <p class="lead">Mantenimento y remodelaciones para cualquier estilo .</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img  src=" {{ asset('images/remodelación.jpg') }} " class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">


      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Renta y<span class="text-muted"> Venta.</span></h2>
        <p class="lead">Herramientas para la construcción de su obra y maquinaria como excabadoras, revolvedoras, bulldozers y andamios.</p>
      </div>
      <div class="col-md-5">
        <img  src=" {{ asset('images/excabadora2.jpg') }} " class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
