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

    <!-- formulario libro -->
    <br></b>
    
<div class ="col border-primary">
<form action="<?php echo base_url('Home/nuevolibro'); ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del libro </label>
    <input type="text" class="form-control" name="Nombre_lib" id="Nombre_lib" aria-describedby="emailHelp">
    
  
  <div class="mb-3">
    <label for="Autor_lib" class="form-label">Autor</label>
    <input type="text" class="form-control" name="Autor_lib" id="Autor_lib">
  </div>
  <div class="mb-3">
    <label for="Genero_lib" class="form-label">genero del libro</label>
    <input type="text" class="form-control" name="Genero_lib" id="Genero_lib">
  </div>
  <div class="mb-3">
    <label for="resumen_lib" class="form-label">agregar resumen</label>
    <input type="text" class="form-control" name="resumen_lib" id="resumen_lib">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>

</body>