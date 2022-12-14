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
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
          <img src="https://aulaestudio.com/wp-content/uploads/cropped-Logo-una-tinta.png" style="width: 175px; height: 43px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item">
            <a class="nav-link" href="adminUsuarios">Datos usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminLibros">Datos libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminGuia">Datos guias</a>
          </li>
        </ul>
        <li class="nav-item d-flex">
          <a class="nav-link active" aria-current="page" href="admin">Perfil</a>
        </li>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a type="button" href="<?php echo base_url('/Home/Logout');?>" class="btn btn-success">Cerrar Sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

 <!-- Despliege formulario -->

 <div class = "container">
  <table  id="datatables" class="ui celled table" style="width:100%">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre del libro </th>
          <th scope="col">Autor</th>
          <th scope="col">genero del libro</th>
          <th scope="col">agregar resumen</th>
          <th scope="col">imagen</th>
          <th scope="col">Accion</th>
        </tr>
      </thead>
      <tbody>
        <br></b>
        <br></b>
        <h3>Libros en la bd  </h3>
        <?php foreach ($Listalibro as $item):?>
        <tr>
          <td><?php echo $item['cod_lib'];?></td>
          <td><?php echo $item['Nombre_lib'];?></td>
          <td><?php echo $item['Autor_lib'];?></td>
          <td><?php echo $item['Genero_lib'];?></td>
          <td><?php echo $item['resumen_lib'];?></td>
          <td>
              <img src="<?=base_url()?>/writable/uploads/<?php echo $item['imagen'];?>" width="100" height="100" >
          </td>
        </tr>
        <?php endforeach;?>
      
      </tbody>
    </table>
  </div>
  <script src=https://code.jquery.com/jquery-3.5.1.js ></script>
  <script src=https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js></script>
  <script src=https://cdn.datatables.net/1.12.1/js/dataTables.semanticui.min.js></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js></script>

  <script>
    $(document).ready(function () {
        $('#datatables').DataTable();
    });
  </script>


  <script>

    $('#datatables').DataTable( {
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