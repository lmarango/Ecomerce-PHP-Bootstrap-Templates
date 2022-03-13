<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800,900" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="Vistausuario.php">BOOKS</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="VistaUsuario.php"> Productos </span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="VistaSobreNosotros.php"> Sobre Nosotros </span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="VistaContacto.php"> Contactanos </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php
                        echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                    ?>)</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link"><?php if (!empty($_SESSION['usuario'])) {
                        echo "Usuario en línea: ".$nombre=$_SESSION['usuario']['nombre'];
                    }else {
                        echo "";
                    }?></span></a>
                </li>
                <?php
                if (empty($_SESSION['usuario'])) {
                    echo "<li class='nav-item active'>
                    <a class='nav-link' href='index.php'>Iniciar Sesión</span></a>
                    </li>";
                }else {
                    echo"<li class='nav-item active'>
                    <a class='nav-link' href='global/cerrarsesion.php'>Cerar Sesión</span></a>
                    </li>";
                }   
                ?>              
            </ul>
        </div>
    </nav>
    <br/>
    <br/>

    <div class="container">