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

    <!-- formulario guia-->
<div class ="col border-primary">

<form action="<?php echo base_url('Home/nuevaguia'); ?>" method="post">
  <div class="mb-3">
    <label for="nombre_guia" class="form-label">Ingrese el nombre de la guia</label>
    <input type="text" class="form-control" name="nombre_guia" id="nombre_guia" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="tipo_guia" class="form-label">Ingrese el tipo (aprendizaje, guia de estudio, apoyo, desarrollo, control)</label>
    <input type="text" class="form-control" name="tipo_guia" id="tipo_guia">
  </div>
  <div class="mb-3">
    <label for="link_vid_guia" class="form-label">Ingrese un link referente a la guia</label>
    <input type="text" class="form-control" name="link_vid_guia" id="link_vid_guia">
  </div>
  <button type="submit" class="btn btn-primary">agregar</button>
</form>
</div>

</body>
