<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala de estudios</title>

    <link rel ="stylesheet" type = "text/css" href = ">?= base_url() ?>assets/css/estilos.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div >
<?php
                $session = session();
                $estadoLog= false;
                if(isset($session)){
                    if($session->has('isLoggedIn')){
                    if($session->isLoggedIn){
                        $estadoLog = true;
                        $tipo=$session->get('type'); 
                    }
                    }
                }
            ?>
        
                

<nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index2">
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
                        Libreria
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
                            Controles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Home/agregar_control">Agregar control</a></li>
                            <li><a class="dropdown-item" href="Home/mostrar_control">Mostrar control</a></li>
                        </ul>
                    </li>
                    
                    
                    <li class="nav-item">
            <a class="nav-link" href="/proyectobibliote/Home/agregar_usuario"> Registrarse como socio</a>
          </li>

          <ul class="nav navbar-nav navbar-right">
          <li>
          
                    <a type="button" href="/proyectobibliote/Home/ver_perfil" class="btn btn-warning">Mi perfil</a>
                        </li>
                        </ul>

                </ul>
              
                

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    
                    <li>
                      <a type="button" href="<?php echo base_url('/Home/Logout');?>" class="btn btn-success">Cerrar Sesion</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
<br></br>
<div class="container-sm">



 
  </nav>
</body>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  
<br></b>



<div class="container text-center">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
  <div class="row">
    <div class="col-md-8"> <h1>Material de Estudio</h1>
    <br></b>
Cuando el material de estudio está trabajado, organizado y bien estructurado se aprende más fácilmente.

Nuestro cerebro funciona mucho mejor si primero trabamos la información y luego la memorizamos.

Para tener un buen material de estudio hay que empezar por acudir a clase con regularidad y tomar uno sus propios apuntes.

No es lo mismo trabajar uno con sus apuntes que con los apuntes fotocopiados de algún compañero.

Una vez tomados los apuntes lo primero que hay que hacer es revisarlos, si es posible esa misma tarde: comprobar si están completos y se entienden. En caso contrario habrá que subsanar a la mayor brevedad esas deficiencias. Algunos estudiantes pasan sus apuntes a limpio, labor que requiere mucho tiempo. No obstante, poniendo un poco de cuidado a la hora de tomarlos no será necesario y se podrá utilizar ese tiempo en avanzar en su estudio</div>
    <div class="col-6 col-md-4"><img src="https://static.vecteezy.com/system/resources/previews/001/859/244/non_2x/back-to-school-class-computer-online-books-elementary-education-cartoon-free-vector.jpg" class="card-img" alt="..."></div></div>
    

  <!-- acordeon -->
  <div class="row">

    <div class="col-6 col-md-4">


    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        ESTRATEGIA #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Es imprescindible que te pongas a prueba constantemente y que repases constantemente lo estudiado en días anteriores. Esto te permitirá, además de consolidar la información memorizada, formularte pregunta que de otro modo no se te ocurrirían y te ayudarán a comprender tus apuntes como un todo, en vez de como piezas de información separadas o dispuestas en paralelo.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      ESTRATEGIA #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Proponerse un horario de estudio y seguirlo no sirve sólo para ofrecer una imagen de madurez y pulcritud, ya que tiene efectos notables sobre el rendimiento de estudio. Abordar el aprendizaje de manera desorganizada es una manera de terminar estudiando a altas horas de la noche, cuando el sueño y el cansancio hacen mella en nuestra capacidad de concentrarnos.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      ESTRATEGIA #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">No confíes exclusivamente en la técnica de subrayar textos. El hecho de subrayar no ayuda a memorizar el texto si no se repasa varias veces, y de todos modos ceñirse a la memorización de las frases que tienen una línea debajo nos mantiene anclados a la manera en la que la información queda distribuida en el texto original.

En cambio, hacer esquemas y pequeños resúmenes en trozos de papel nos obliga a reformular la información que hemos leído</div>
    </div>
  </div>
</div>


    </div>
    



    <!-- imagenes -->
    <div class="col-6 col-md-4"><img src="https://soyib.com/wp-content/uploads/2021/03/el-aprendizaje-del-estudiante-esta-cambiando-el-enfoque-y-aqui-esta-la-razon-por-la-que-es-algo-bueno-tiempos-de-india.jpg" class="card-img" alt="..."></div></div>
    <div class="col-6 col-md-4">
  </div>
  
  </div>
</div>
<br></b>

<!-- CONTENT -->
<center> 
<section>
    <h4>Educar es la mejor solucion</h4>
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


</html>