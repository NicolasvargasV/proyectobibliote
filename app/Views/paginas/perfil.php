<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Bienvenido a la sala de estudios</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title></title>
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
                            <li><a class="dropdown-item" href="agregar_control">Agregar control</a></li>
                            <li><a class="dropdown-item" href="mostrar_control">Mostrar control</a></li>
                        </ul>
                    </li>
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
</body>

    <body>
    
<div class="container">








        <div class="row">

            <div class="col-1">
           
            </div>
            <div class="col-5">
            
            </div>
            <div class="col-6">

            </div>
        </div>
        <div class="row">
        <div class="col-1">

         </div>
           <div class="col-5">
                <div class="container">
                
            </div>
            <br></br>  
    <br></br>
</div>



<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                

        <?php foreach ($Listausers as $item):?>

        <?php endforeach;?>
        <img src="<?=base_url()?>/images_user/<?php echo $item['imagenes'];?>" width="300px" height="300" style="border:solid;border-radius:20px" ></td>

               <div class="col-6">
                <div class="row"><a type="button" href="/proyectobibliote/Home/cambiar_ig"  class="btn btn-primary mt-3 float-end">cambiar imagen de perfil</a></div>
                
            </div>

<center>
                            </div>

                           
                            <div class="col-lg-6 px-xl-10">
                            <?php foreach ($ListaUsuario as $item):?>
                                  <ul class="list-unstyled mb-1-9">
                                <?php endforeach;?>
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">Señor/a <?php $session = session(); echo $session->get('name');?> </td> </h3>
                                    
                                    
                                </div>
                                <br></br>

                                
                                <ul class="list-unstyled mb-1-9">
                                <h3><li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">id:</span> <td> <?php echo $item['id_usuario'];?></td></h3></li>
                                <h3> <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">rut usuario:</span> <td><?php echo $item['rut_Usuario'];?></td></h3></li>
                                <h3> <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">fecha nacimiento:</span> <td><?php echo $item['fechaNac'];?></td></h3></li>
                                <h3>  <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Apellidos:</span><td><?php echo $item['Apaterno'];?></td>_<td><?php echo $item['Amaterno'];?></td></td></h3></li>
                                <h3> <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">email:</span> <td><?php $session = session(); echo $session->get('email');?></td></h3></li>
                                </ul>
                                <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <span class="section-title text-primary mb-3 mb-sm-4">Informacion importante</span>
                    <p>Usted es parte de nuestra compañia, exigimos ser responsable con la informacion que publica ya que de esta manera estaremos ayudando a toda la comunidad estudiantil para que logren tener una mejora considerable del aprendizaje en la enseñanza media.</p>
                    
                </div>
            </div>

                           
            <DIV align="right">
            
            <a type="button" href="<?php echo base_url('/index2');?>" class="btn btn-danger ">REGRESAR</a>
            
                         
</div>
            
                </div>
            </div>
        </div>
    </div>
</section>



</body>
</html>