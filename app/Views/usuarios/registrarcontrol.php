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
   <!-- Chart.js -->
    <script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js>    </script>
    <!-- cqry -->
</head>

<body>
<?php
  $session = session();
  $estadoLog= false;
  if(isset($session)){
    if($session->has('isLoggedIn')){
      if($session->isLoggedIn){
        $estadoLog = true;
      }
    }
  }
?>
<nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
        <a class="navbar-brand" href=<?php echo base_url('/index2');?> class="btn btn-success">
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
                        Libreria
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
                            <li><a class="dropdown-item" href="mostrar_control">Mostrar grafico</a></li>
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
<body>
    <div class = "container">
        <div class="container-fluid">
            <!-- formulario control -->
            <br></b>
            <div class ="col border-primary">
                <h1>Registrar control</h1>
                <form action="<?php echo base_url('Home/nuevocontrol'); ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre control </label>
                        <input type="text" class="form-control" name="nombre_control" id="nombre_control" aria-describedby="emailHelp">
                    </div>   
                    <div class="mb-3">
                        <label for="Autor_lib" class="form-label">agregar asignatura del control</label>
                        <input type="text" class="form-control" name="asignatura_control" id="asignatura_control">
                    </div>
                    <div class="mb-3">
                        <label for="Genero_lib" class="form-label">Grado del control</label>
                        <input type="text" class="form-control" name="grado_control" id="grado_control">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>








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