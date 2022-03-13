<?php
//echo "Hola, soy sesion en la carpeta modulos";

if (isset($_POST['btnLogin'])) {
    include("global/conexion.php");
    $txtEmail=($_POST['txtEmail']);
    $txtPassword=($_POST['txtPassword']);
    $sentenciaSQL=$pdo->prepare("SELECT * FROM tblusuarios WHERE correo=:correo AND password=:password");
    $sentenciaSQL->bindParam("correo",$txtEmail,PDO::PARAM_STR);
    $sentenciaSQL->bindParam("password",$txtPassword,PDO::PARAM_STR);
    $sentenciaSQL->execute();

    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);
    
    $numeroRegistros=$sentenciaSQL->rowCount();

    if ($numeroRegistros >= 1) {
        session_start();
        if ($registro['rol']=="Admin") {
            header('Location:Vistapanel.php');
        }
        if ($registro['rol']=="No-Admin") {
            header('Location:VistaUsuario.php');
        }
        $_SESSION['usuario']=$registro;
        echo "Bienvenido...";
    }else{
        echo "No se encontraron registros";
    }

    echo "<br> hay que verificar el login";
}

if (isset($_POST['btnRegistro'])) {
    include("global/conexion.php");
    $txtNombre=($_POST['txtNombre']);
    $txtApellido=($_POST['txtApellido']);
    $txtEmail=($_POST['txtEmail']);
    $txtPassword=($_POST['txtPassword']);
    $txtFoto=($_POST['txtFoto']);
    if ($txtNombre != null && $txtApellido !=null && $txtEmail !=null && $txtPassword !=null){
        $sentenciaSQL=$pdo->prepare("INSERT INTO `tblusuarios` 
        (`ID`, `nombre`, `apellidos`, `correo`, `password`, `foto`, `rol`) 
        VALUES (NULL, :nombre, :apellidos, :correo, :password, :foto, 'No-Admin')");
        $sentenciaSQL->bindParam("nombre",$txtNombre,PDO::PARAM_STR);
        $sentenciaSQL->bindParam("apellidos",$txtApellido,PDO::PARAM_STR);
        $sentenciaSQL->bindParam("correo",$txtEmail,PDO::PARAM_STR);
        $sentenciaSQL->bindParam("password",$txtPassword,PDO::PARAM_STR);
        $sentenciaSQL->bindParam("foto",$txtFoto,PDO::PARAM_STR);
    
        if ($sentenciaSQL->execute()) {
            echo "<script>alert('Usuario Registrado...');</script>";
        }else {
            echo "<script>alert('ERROR...');</script>";
        }
    }else {
        echo "<script>alert('Los datos marcados con (*) son obligatorios');</script>";
    }
}
?>