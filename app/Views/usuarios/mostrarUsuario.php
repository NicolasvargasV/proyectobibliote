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
    
<!-- datatable -->
<link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css> </link>
<link rel="stylesheet" href=https://cdn.datatables.net/1.12.1/css/dataTables.semanticui.min.css></link>
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  


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
              PTU
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="https://queestudiarenchile.com/descarga-3-libros-gratis-para-preparar-la-ptu-prueba-de-transicion/">Material</a></li>
              <li><a class="dropdown-item" href="https://drive.google.com/file/d/1kheokWKherWaNQ85OkZc48CbBDPmW7-f/view">Guias</a></li>
              <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=OxgnJ-IgxA0">Ensayos</a></li>       
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agregar_usuario"> Registrarse como socio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="nuevoUsuario">
              Socios registrados
            </a>
          </li>
        </ul> 
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li>
                      <a type="button" href="<?php echo base_url('/Home/Logout');?>" class="btn btn-success">Cerrar Sesion</a>
                    </li><!-- el href es  Home/Logout-->
        </ul>
      </div>
    </div>
  </nav>
</body>
<div class="container-fluid">
<div align="left">
<br></b>


</div>
<?php foreach ($ListaUsuario as $item):?>
                                  <ul class="list-unstyled mb-1-9">
                                <tr>
                                </tr>
                                <?php endforeach;?>

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                        <h3>  verificacion de correo enviada<br></b> Socio registrado correctamente!!  </h3>
                        
                            <div >
                            <br></b>
                            <center>
                                <img src="https://cdn.memegenerator.es/imagenes/memes/full/30/71/30716319.jpg" width="50%" height="50%" alt="...">
</center> 
                            </div>
                            <div class="col-lg-6 px-xl-5">
                                <div >
                                
                                <h1><li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Señor/a: <td><?php echo $item['nombres'];?></td> </h1>
                                    
                                    
                                </div>
                                

                                
                                <ul >
                                <h3><li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">id:</span> <td> <?php echo $item['id_usuario'];?></td></h3></li>
                                <h3> <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">email:</span> <td><?php echo $item['email'];?></td></h3></li>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <DIV align="right">
            
            <a type="button" href="<?php echo base_url('/index.php/Home/agregar_usuario');?>" class="btn btn-danger ">REGRESAR</a>
            
                         
</div>
            
                </div>
            </div>
        </div>
    </div>
</section>






</script>
    <br></br>
    
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

</div>
</body>