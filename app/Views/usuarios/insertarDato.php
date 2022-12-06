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
<?php
                $session = session();
                $estadoLog= false;
                if(isset($session)){
                    if($session->has('isLoggedIn')){
                    if($session->isLoggedIn){
                        $estadoLog = true;
                        $tipo=$session->get('type'); 
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
                            <li><a class="dropdown-item" href="Home/agregar_guia">Agregar guias</a></li>
                            <li><a class="dropdown-item" href="Home/mostrar_guia">Mostrar guias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Controles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Home/agregar_guia">Agregar control</a></li>
                            <li><a class="dropdown-item" href="Home/mostrar_guia">Mostrar control</a></li>
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
</body>

<div class="container-sm">
  <body> 
    <!-- esto es el header -->
    

  <!-- formulario -->
  <br></b>
  <br></b> 
  <br></b>
    <div class ="col border-primary">
      <h3>Registrar un tipo de usuario</h3>
      <form action="<?php echo base_url('Home/mostrarDato'); ?>" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nombre </label>
          <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" id="descripcion">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">estado</label>
          <input type="text" class="form-control" name="estado" id="estado">
        </div>
        <button type="submit" class="btn btn-primary">agregar</button>
      </form>
    </div>

  
 
  






<head>
	
	<link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxbarcode.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxqrcode.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="https://www.jqwidgets.com/jquery-widgets-demo/scripts/demos.js"></script>
	<style>
	</style>
	<script type="text/javascript">
		window.onload = function () {
			const qrcodes = [...document.querySelectorAll('.qrcode')];
			for (let i = 0; i < qrcodes.length; i++) {
				const qrcodeElement = qrcodes[i];
				const renderAs = qrcodeElement.getAttribute('render-as') || 'svg';
				const displayLabel = qrcodeElement.hasAttribute('display-label') ? true : false;
				const value = qrcodeElement.getAttribute('value');
				const labelPosition = qrcodeElement.getAttribute('label-position') || 'bottom';
				const errorLevel = qrcodeElement.getAttribute('error-level') || 'L';
				const embedImage = qrcodeElement.getAttribute('embed-image') || '';
				// create Barcode component
				new jqxQRcode(qrcodeElement, {
					renderAs: renderAs,
					value: value,
					errorLevel: errorLevel,
					labelPosition: labelPosition,
					embedImage: embedImage,
					imageWidth: 40,
					imageHeight: 60,
					displayLabel: displayLabel
				});
			}
		}
	</script>
</head>
<body>
	<div id="">
    <br></b>
    <br></b>
		<section>
			<h2>Informacion Importante</h2>
			<div class="module">
			</div>
			<div id="barcode-demo-container" class="module">
				<div class="card-container">
					<div class="card-body">
						
					</div>
					<div class="card-footer">
						<div class="qrcode" value="https://youtu.be/rFxhSpdkzJ8" square-width="6"></div>
					</div>
				</div>
			
				</div>
			</div>
		</section>
	</div>
	
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
</html>