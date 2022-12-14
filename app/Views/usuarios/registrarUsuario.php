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
                            <li><a class="dropdown-item" href=<?php echo base_url('Home/agregar_guia');?> >Agregar guias</a></li>
                            <li><a class="dropdown-item" href=<?php echo base_url('Home/mostrar_guia');?> >Mostrar guias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Controles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  href=<?php echo base_url('Home/agregar_control');?> >Agregar control</a></li>
                            <li><a class="dropdown-item"  href=<?php echo base_url('Home/mostrar_control');?> >Mostrar control</a></li>
                        </ul>
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
</body>




  <body>
    <!-- formulario -->

  <?php
  $session=session();
  $estadoLog=false;
  if(isset($session)){
    if($session->has('isLoggedIn')){
      if($session->isLoggedIn){
        $estadoLog =true;
      }
    }
  }

?>

<?php
    if($estadoLog){
      ?>
      <?php
      if(isset($aux)){
        print_r("data");
        $name=$aux['users'][0]['nombreAutor'];
        print($aux);
      }
      else{
        //print("no data");
      }
    }
?>
<?php   
      if($estadoLog)
  ?>

<div class="container-fluid">
<br></b>
<div class ="col border-primary">
<form action="<?php echo base_url('Home/nuevoUsuario'); ?>" method="post">
 
  <div class="mb-3">
    <label for="rut_Usuario" class="form-label">Ingrese el rut del Usuario</label>
    <input type="text" class="form-control" name="rut_Usuario" id="rut_Usuario">
  </div>
  <div class="mb-3">
    <label for="fechaNac" class="form-label">Ingrese su fecha de nacimiento</label>
    <input type="text" class="form-control" name="fechaNac" id="fechaNac">
  </div>
  <div class="mb-3">
    <label for="nombres" class="form-label">Ingrese su Nombre</label>
    <input type="text" class="form-control" name="nombres" id="nombres">
  </div>
  <div class="mb-3">
    <label for="Apaterno" class="form-label">Ingrese el apellido paterno</label>
    <input type="text" class="form-control" name="Apaterno" id="Apaterno">
  </div>
  <div class="mb-3">
    <label for="Amaterno" class="form-label ">Ingrese el apellido materno</label>
    <input type="text" class="form-control" name="Amaterno" id="Amaterno">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>

  <button type="submit" class="btn btn-primary">agregar</button>
</form>
</div>

<br></b>
<h3>Socios registrados  </h3>
<!-- Despliege formulario -->
<table  id="example" class="ui celled table" style="width:100%">
      <thead>
      <tr>
        <th scope="col">ID </th>
        <th scope="col">Rut del usuario </th>
        <th scope="col">fecha de nacimiento</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido paterno</th>
        <th scope="col">Apellido materno</th>
        <th scope="col">Email</th>

        
        <th scope="col">Accion</th><!--QUIERO ELIMINAR  -->
        
      </tr>
      </thead>
      <tbody>
      

       



<?php foreach ($ListaUsuario as $item):?>
          
          <tr>
            
            <td><?php echo $item['id_usuario'];?></td>
            <td><?php echo $item['rut_Usuario'];?></td>
            <td><?php echo $item['fechaNac'];?></td>
            <td><?php echo $item['nombres'];?></td>
            <td><?php echo $item['Apaterno'];?></td>
            <td><?php echo $item['Amaterno'];?></td>
            <td><?php echo $item['email'];?></td>
            
            <td><a href="<?=base_url('borrarUsuarios/'.$item['id_usuario']);?>"class="btn btn-danger" type="button">Borrar</a></td>
            
          </tr>
        <?php endforeach;?>
    
    </tbody>
  </table>



<script src=https://code.jquery.com/jquery-3.5.1.js ></script>
<script src=https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js></script>
<script src=https://cdn.datatables.net/1.12.1/js/dataTables.semanticui.min.js></script>
<script src=https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js></script>




    <script>

    $(document).ready(function () {
        $('#example').DataTable();
    });

    </script>


<script>

    $('#example').DataTable( {
        responsive: true,
        autoWidth: false,
        "language": {
            "processing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ning??n dato disponible en esta tabla",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(De _MAX_ total records)",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
             "search": "Buscar:",
            "infoThousands": ",",
            "loadingRecords": "Cargando...",
            "paginate": {
            "first": "Primero",
            "last": "??ltimo",
            "next": "Siguiente",
            "previous": "Anterior"}
        },
            "aria": {
                "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sortDescending": ": Activar para ordenar la columna de manera descendente"
    }
    } );

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


</body>
