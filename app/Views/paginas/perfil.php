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
            <center>
            <div class="col-6">
                <?php $nombre=$session->get('name');?>
                <div class="row">Cambiar imagen de perfil:  </div>
                
                <div class="row"> </div>
                <form action="<?= base_url()?>/Home/upload_image" enctype="multipart/form-data" method="post">
                <div class="row"><input class="form-comtrol" type="file" enctype="multipart/form-data" name='images_user'></div>
                <div class="row"><input type="submit" class="btn btn-primary mt-3 float-end" value="enviar"> </div>
                
            </div>
    </center>
    <br></br>
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
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
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