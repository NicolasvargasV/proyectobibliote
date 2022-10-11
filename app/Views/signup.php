<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>REGISTRARSE</title>
    <link href="<?php echo base_url() ?>/public/css/bootstrap.min.css" rel="stylesheet" >
    <script src="<?php echo base_url() ?>/public/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" ></script>
</head>
<body>
    <body class = "m-0 vh-100 row justify-content-center align-item-center">
        <div class = "col-xxl-5 col-lg-5 col-md-8 col-sm-12 pt-5 mt-5">
            <div class="card text-bg-success">
                <div class="card-header text-center">
                    <h2>Registrarse</h2>
                    <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <div class="card-body">
                    <?php endif;?>
                    <form action="<?php echo base_url(); ?>/SignupController/store" method="post">
                        <div class="mb-3">
                            <input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-dark">Registrarse</button>
                        <a href ="<?php echo base_url() ?>/signin" class="btn btn-link text-white">Iniciar Sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url() ?>/public/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js"></script> 
</body>
</html>