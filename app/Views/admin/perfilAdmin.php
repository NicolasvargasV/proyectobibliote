<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" type = "text/css" href = ">?= base_url() ?>assets/css/estilos.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a class="nav-link" href="Home/adminUsuarios">Datos usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Home/adminLibros">Datos libros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Home/adminGuia">Datos guias</a>
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
</html>