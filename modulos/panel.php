<?php
include('global/sesiones.php');
include('global/conexion.php');

    //COnteo y sumatoria de las ventas
    $sentenciaSQL=$pdo->prepare("SELECT count(*) totalVentas, SUM(Total) as IngresosTotalVentas FROM `tblventas`");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $totalVentas=$registro['totalVentas'];
    $ingresosTotalVentas=$registro['IngresosTotalVentas'];

    //Conteo de usuarios registrados
    $sentenciaSQL=$pdo->prepare("SELECT count(*) totalUsuarios FROM `tblusuarios` WHERE rol='No-Admin'");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $contUsuarios=$registro['totalUsuarios'];

    //Conteo de productos
    $sentenciaSQL=$pdo->prepare("SELECT count(*) totalProductos FROM `tblproductos`");
    $sentenciaSQL->execute();
    $registro=$sentenciaSQL->fetch(PDO::FETCH_ASSOC);

    $contProductos=$registro['totalProductos'];
?>