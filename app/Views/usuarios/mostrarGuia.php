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
    
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("css/jquery.dataTables.min.css");?> />
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("css/buttons.dataTables.min.css");?> />
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
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
                            Controles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="agregar_guia">Agregar control</a></li>
                            <li><a class="dropdown-item" href="mostrar_guia">Mostrar control</a></li>
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
                      <a type="button" href="<?php echo base_url('/Home/Logout');?>" class="btn btn-success">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body>
        <div class="container body-content">
            <center><h1>Listado de guias </h1></center>
            <table id="datatables" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Nombre de la guia</th>
                        <th scope="col">tipo de guia </th>
                        <th scope="col">link referencial de la guia</th>
                    </tr>
                </thead>
                <h5>Opciones de descarga  </h5>
                <?php foreach ($Listaguia as $item):?>  
                <tr>                
                    <td><?php echo $item['nombre_guia'];?></td>
                    <td><?php echo $item['tipo_guia'];?></td>
                    <td><?php echo $item['link_vid_guia'];?></td>
                
                </tr>
                <?php endforeach;?>   
            </table>
            <footer>
                <p id="fecha">
                    <script type="text/javascript">
                        var d = new Date();
                        var year = d.getFullYear();
                        document.getElementById("fecha").innerHTML ='<center>'+ '<br>' + '<strong>' +year + '</strong>'+'</center>';
                    </script>
                </p>
            </footer>
        </div>

        <script src=<?php echo base_url("js/jquery-3.3.1.js");?>></script>
        <script src=<?php echo base_url("js/jquery.dataTables.min.js");?>></script>
        <script src=<?php echo base_url("js/dataTables.buttons.min.js");?>></script>
        <script src=<?php echo base_url("js/buttons.flash.min.js");?>></script>
        <script src=<?php echo base_url("js/jszip.min.js");?>></script>
        <script src=<?php echo base_url("js/pdfmake.min.js");?>></script>
        <script src=<?php echo base_url("js/vfs_fonts.js");?>></script>
        <script src=<?php echo base_url("js/buttons.html5.min.js");?>></script>
        <script src=<?php echo base_url("js/bootstrap.js");?>></script>
        <script src=<?php echo base_url("js/scripts.js");?>></script>
        <script src=<?php echo base_url("js/bootstrap-toggle.min.js");?>></script>

        <script>

        </script>
</body>


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
