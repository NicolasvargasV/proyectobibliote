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
        <a class="navbar-brand" href=<?php echo base_url('/index');?> class="btn btn-success">
                <img src="https://aulaestudio.com/wp-content/uploads/cropped-Logo-una-tinta.png" style="width: 175px; height: 43px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="Home/insertaDato">
                            Insertar Datos
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.sectormatematica.cl/educmedia.htm">
                            Guias practicas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.iesboliches.org/tecnologia/index.php/16-videos-tecnicas-estudio">
                            Tecnicas de estudios
                        </a>
                    </li>
                    <div class="btn-group">
                  
                  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    
                  Accion
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/proyectobibliote/Home/agregar_libro">agregar libro</a></li>
                    <li><a class="dropdown-item" href="/proyectobibliote/Home/agregar_guia">agregar guia</a></li>
                    <li><a class="dropdown-item" href="#">agregar control</a></li>
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
    <div class="container-fluid">
    <br></b>

    <!-- formulario guia-->
<div class ="col border-primary">

<form action="<?php echo base_url('Home/nuevaguia'); ?>" method="post">
  <div class="mb-3">
    <label for="nombre_guia" class="form-label">Ingrese el nombre de la guia</label>
    <input type="text" class="form-control" name="nombre_guia" id="nombre_guia" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="tipo_guia" class="form-label">Ingrese el tipo (aprendizaje, guia de estudio, apoyo, desarrollo, control)</label>
    <input type="text" class="form-control" name="tipo_guia" id="tipo_guia">
  </div>
  <div class="mb-3">
    <label for="link_vid_guia" class="form-label">Ingrese un link referente a la guia</label>
    <input type="text" class="form-control" name="link_vid_guia" id="link_vid_guia">
  </div>
  <button type="submit" class="btn btn-primary">agregar</button>
</form>
</div>

</body>
