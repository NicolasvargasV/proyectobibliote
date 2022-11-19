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
                            <li><a class="dropdown-item" href="Home/insertaDato">Insertar datos</a></li>
                            <li><a class="dropdown-item" href="Home/mostrarDato">Mostrar datos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Datos libros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Home/agregar_libro">Insertar libros</a></li>
                            <li><a class="dropdown-item" href="Home/mostrar_libro">Mostrar libros</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Guias practicas
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Home/agregar_guia">Agregar guias</a></li>
                            <li><a class="dropdown-item" href="Home/mostrar_guia">Mostrar guias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Control guias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Home/agregar_guia">Agregar control</a></li>
                            <li><a class="dropdown-item" href="Home/mostrar_guia">Mostrar control</a></li>
                        </ul>
                    </li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Accion
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Grafico libro</a></li>
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
<br></br>
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
    </body>
</div> 
     <br></b>
<!-- vamos a separar -->
<div class = "container">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-sm-12  col-md-4 col-lg-6 col-xl-3 border texto">
                <h3>Unidad de estudio</h3>Fija un tema a estudiar y estúdialo. Organizar información relacionada 
                entre sí por el hecho de permanecer a un tema o categoría de cualquier clase es mucho más fácil 
                que estudiar piezas de información dispersas y desordenadas. Para eso es bueno que leas la lección
                una vez para crear un mapa mental de la localización de los temas en el texto y luego te focalices
                en cada uno de ellos. Eso sí, cuando repases la información estudiada (algo que deberías hacer muy a 
                menudo, como veremos), es mejor que no lo hagas de un solo tema, sino que incluyas elementos de varios   
            </div>
            <div class=" col-sm-12  col-md-4 col-lg-6 col-xl-3 border texto ">
                <div class="texto ">
                    <h3>Ten una rutina</h3>
                    Investigaciones sobre los procesos atencionales y el rendimiento de estudio muestran que es mejor 
                    controlar los ratos que le dedicamos al estudio poniendo un límite de tiempo más bien bajo para cada
                     sesión. Lo ideal es hacer que los ratos de estudio no superen los 30 minutos, ya que mostramos bastante 
                    más facilidad para asimilar información que nos llega en ráfagas cortas y repetidas que en una sola que sea 
                    larga y tediosa. De lo que se trata es de mantener el cerebro al 100% en cada momento (por cierto, mantener el 
                    sueño a raya es sagrado, y para eso nada como dormir bien).
                </div>
            </div>
            <div class="col-sm-12  col-md-4 col-lg-6 col-xl-3 border texto ">
                <h3>Mayor productividad</h3>
                Si te interesa primero conocer los textos o documentos sobre determinada materia para después 
                investigar acerca de los diversos formatos que aportan a lo que aprendiste es adecuado que 
                consultes las bibliografías en materiales escaneados disponibles en nuestra pagina, tener en 
                cuenta un horario de estudio y seguirlo no sirve sólo para ofrecer una imagen de madurez y 
                pulcritud ya que tiene efectos notables sobre el rendimiento de estudio. Abordar el aprendizaje 
                de manera desorganizada es una manera de terminar estudiando a altas horas de la noche. 
            </div>
            <div class="col-sm-12  col-md-4 col-lg-6 col-xl-3 border texto ">
                <h3>Tecnicas de estudio</h3>
                <br></b>
                <iframe width="100%" height="75%" src="https://www.youtube.com/embed/KJRXEU225SE?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    
            </div>
        </div> 
    </div>   
      
    <!-- vamos a separar -->
    <center> 
        <img src="https://educacion2.com/wp-content/uploads/t%C3%A9cnicas-de-estudio.jpg" style="  max-width: 1000px ;">
        <section>
            <h1>Educar es la mejor solucion</h1>
            <p>esta pagina fue creada con fines educativos by FerN.</p>
        </section>
    </center>
</div>

<!--FOOTER-->
<footer>
    <div class="copyrights">
      <center>
        <p>&copy; <?= date('Y') ?> proyecto universitario destinado para el ramo de tecnologia multimedia .</p>
      </center>
    </div>
</footer>

</body>

</html>
