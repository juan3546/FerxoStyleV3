<?php
$servidor =  Ruta::ctrRutaServidor();
?>

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="vistas/img/plantilla/logo.png" alt="" width="130px" class="mx-5"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mx-4 mb-2 mb-lg-0 large-text-right">
        <li class="nav-item mx-5">
          <a class="nav-link active text-dark" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-dark" href="#">Productos</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-dark" href="#" >Personalizados</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-dark" href="<?php echo $url; ?>personalizados" >Pedidos personalizados</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link text-dark" href="<?php echo $url; ?>cotizacion" >Cotizaciones</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-success mx-3 btn-lg" type="submit">Entrar</button>
      </form>
    </div>
  </div>
</nav>
