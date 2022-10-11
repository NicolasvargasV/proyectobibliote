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
    <div class="container-fluid">
    <br></b>

    <!-- formulario -->
<div class ="col border-primary">
<form action="<?php echo base_url('Home/nuevoUsuario'); ?>" method="post">
  <div class="mb-3">
    <label for="rut_Usuario" class="form-label">rut </label>
    <input type="text" class="form-control" name="rut_Usuario" id="rut_Usuario" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="fechaNac" class="form-label">fechaNac</label>
    <input type="text" class="form-control" name="fechaNac" id="fechaNac">
  </div>
  <div class="mb-3">
    <label for="Apaterno" class="form-label">1er apellido</label>
    <input type="text" class="form-control" name="Apaterno" id="Apaterno">
  </div>
  <div class="mb-3">
    <label for="Amaterno" class="form-label ">2do apellido</label>
    <input type="text" class="form-control" name="Amaterno" id="Amaterno">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>
  <button type="submit" class="btn btn-primary">agregar</button>
</form>
</div>

</body>