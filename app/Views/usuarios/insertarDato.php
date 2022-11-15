<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bienvenido al aula virtual</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-white">
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
                            Datos usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="insertaDato">Insertar datos</a></li>
                            <li><a class="dropdown-item" href="mostrarDato">Mostrar datos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Datos libros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_libro">Insertar libros</a></li>
                            <li><a class="dropdown-item" href="mostrar_libro">Mostrar libros</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Guias practicas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_guia">Agregar guias</a></li>
                            <li><a class="dropdown-item" href="mostrar_guia">Mostrar guias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Control guias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_control">Agregar control</a></li>
                            <li><a class="dropdown-item" href="mostrar_control">Mostrar control</a></li>
                        </ul>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Accion
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/proyectobibliote/Home/agregar_libro">agregar libro</a></li>
                            <li><a class="dropdown-item" href="/proyectobibliote/Home/agregar_guia">agregar guia</a></li>
                            <li><a class="dropdown-item" href="/proyectobibliote/Home/agregar_control">agregar control</a></li>
                            <li><hr class="dropdown-divider"></li>
                        </ul>
                    </div>
                </ul>

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a type="button" href="<?php echo base_url("signin");?>" class="btn btn-success">INGRESAR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

<div class="container-sm">
  <body> 
    <!-- esto es el header -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://media.istockphoto.com/vectors/students-in-audience-young-people-listening-lecture-in-university-vector-id1211520511?k=20&m=1211520511&s=170667a&w=0&h=fhcEssLGr5OudlOVwXrwiT81ulNZf4-tRPJqG7TqjwU=" width="100%" height="50%">
        </div>
        <div class="carousel-item">
          <img src="https://www.redacademica.edu.co/sites/default/files/2021-12/TRABAJO%20AUTONOMO_0.jpg" width="100%" height="50%">
        </div>
        <div class="carousel-item">
          <img src="https://ipla.cl/wp-content/uploads/2021/12/Header-IPLA-CL-SECCIONES-INTERNAS-EPJA.jpg" width="100%" height="50%">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>     

  <!-- formulario -->
  <br></b>
    <div class ="col border-primary">
      <h3>Registrar un tipo de usuario</h3>
      <form action="<?php echo base_url('Home/mostrarDato'); ?>" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre </label>
          <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" id="descripcion">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">estado</label>
          <input type="text" class="form-control" name="estado" id="estado">
        </div>
        <button type="submit" class="btn btn-primary">agregar</button>
      </form>
    </div>

  <!-- Despliege formulario -->
 
  <br></b>
  <br></b> 
  <!-- CONTENT -->
  <center> 
  <section>
      
      <h1>Educar es la mejor solucion</h1>
      <p>esta pagina fue creada con fines educativos by FerN.</p>

  </section>
  </div>


  <!--FOOTER-->
  <footer>
      <div class="copyrights">
      <center>
          <p>&copy; <?= date('Y') ?> proyecto universitario destinado para el ramo de tecnologia multimedia .</p>
          </center>
      </div>
  </footer>

  </center> 
</body> 
</html>
