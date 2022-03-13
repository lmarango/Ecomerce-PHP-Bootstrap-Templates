<?php
include('global/sesiones.php');
include('global/conexion.php');
echo "Hola, soy ventas en la carpeta modulos";
//Sentencia para obtener las ventas
    $sentencia=$pdo->prepare("SELECT * FROM `tblventas`");
    $sentencia->execute();
    $listaVentas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//Sentecia para el total de ventas
    $sentenciaSQL=$pdo->prepare("SELECT SUM(Total) as IngresosTotalVentas FROM `tblventas`");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $totalVentas=$registro['IngresosTotalVentas'];

?>