<body>
  <?php 
    $estadoLog = false;
    if (isset($session)) 
    {
      if($session->has('isLoggedIn'))
      {
        if($session->isLoggedIn)
        {
          $estadoLog = true;
        }
      }
    }
  ?>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">
      <img src="https://aulaestudio.com/wp-content/uploads/cropped-Logo-una-tinta.png" style="width: 175px; height: 43px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">1° MEDIO</a></li>
            <li><a class="dropdown-item" href="#">2° MEDIO</a></li>
            <li><a class="dropdown-item" href="#">3° MEDIO</a></li>
            <li><a class="dropdown-item" href="#">4° MEDIO</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PAES
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://preucv.cl/google-programa-experience-2023?gclid=Cj0KCQiAm5ycBhCXARIsAPldzoUkcMB2P-PLTlG00S2FuskNStoc2SNw_ZqZVenOy1phTRvnhALWLBoaAlz0EALw_wcB">Preuniversitario</a></li>
            <li><a class="dropdown-item" href="https://www.preugauss.com/post/sabemos-lo-que-entra-en-la-paes">Contenidos</a></li>
            <li><a class="dropdown-item" href="https://muevetp.cl/noticias/hacks-estudiar-para-la-paes/">Ayuda</a></li>            
          </ul>
        </li> 
          <?php
          if ($estadoLog) 
          { ?>
            <li class="nav-item">
              <a class="nav-link" href="Home/mostrar_libro">Libreria</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="Home/mostrar_guia">Guias practicas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://queestudiarenchile.com/descarga-3-libros-gratis-para-preparar-la-ptu-prueba-de-transicion/">Material</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://drive.google.com/file/d/1kheokWKherWaNQ85OkZc48CbBDPmW7-f/view">Guias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.youtube.com/watch?v=OxgnJ-IgxA0">Ensayos</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a type="button" href="<?php echo base_url("signin");?>" class="btn btn-success">INGRESAR</a>
            </li>
          </ul>
          <?php 
          }
          ?>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <?php 
              if ($estadoLog) 
              {
                    ?>
                    <span class="navbar-text">Bienvenid@ <?php echo $session->nombres; ?>     </span>
                    <a class="btn btn-success" type="submit" href="<?php echo base_url('Usuario/logout'); ?>">Logout</a>
                    <?php 
              }
              else
              {
                ?>
                <a class="btn btn-success" type="submit" href="<?php echo base_url('Usuario/login'); ?>">Login</a>
                <?php 
              }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>



  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">
      <img src="https://aulaestudio.com/wp-content/uploads/cropped-Logo-una-tinta.png" style="width: 175px; height: 43px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">1° MEDIO</a></li>
            <li><a class="dropdown-item" href="#">2° MEDIO</a></li>
            <li><a class="dropdown-item" href="#">3° MEDIO</a></li>
            <li><a class="dropdown-item" href="#">4° MEDIO</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PAES
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://preucv.cl/google-programa-experience-2023?gclid=Cj0KCQiAm5ycBhCXARIsAPldzoUkcMB2P-PLTlG00S2FuskNStoc2SNw_ZqZVenOy1phTRvnhALWLBoaAlz0EALw_wcB">Preuniversitario</a></li>
            <li><a class="dropdown-item" href="https://www.preugauss.com/post/sabemos-lo-que-entra-en-la-paes">Contenidos</a></li>
            <li><a class="dropdown-item" href="https://muevetp.cl/noticias/hacks-estudiar-para-la-paes/">Ayuda</a></li>            
          </ul>
        </li>        
        <li class="nav-item">
          <a class="nav-link" href="Home/mostrar_libro">Libreria</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="Home/mostrar_guia">Guias practicas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://queestudiarenchile.com/descarga-3-libros-gratis-para-preparar-la-ptu-prueba-de-transicion/">Material</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://drive.google.com/file/d/1kheokWKherWaNQ85OkZc48CbBDPmW7-f/view">Guias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.youtube.com/watch?v=OxgnJ-IgxA0">Ensayos</a>
        </li>       
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a type="button" href="<?php echo base_url("signin");?>" class="btn btn-success">INGRESAR</a>
        </li>
      </ul>
    </div>
  </div>
</nav>