<?php
include("global/sesiones.php");
echo "Hola, soy productos en la carpeta modulos";
if (isset($_POST['btnRegProducto'])) {
    include("global/conexion.php");

    $nombre=$_POST['txtNombre'];
    $descripcion=$_POST['txtDescripcion'];    
    $precio=$_POST['txtPrecio'];
    $imagen=$_POST['txtImagen'];
    
    $consulta = $pdo->prepare("INSERT INTO `tblproductos` 
    (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) 
    VALUES (NULL, :nombre, :descripcion, :precio, :imagen)");

    $consulta->bindParam('nombre',$nombre,PDO::PARAM_STR);
    $consulta->bindParam('descripcion',$descripcion,PDO::PARAM_STR);
    $consulta->bindParam('precio',$precio,PDO::PARAM_INT);
    $consulta->bindParam('imagen',$imagen,PDO::PARAM_STR);

    if ($consulta->execute()) {
        echo "<script>alert('Libro Registrado...');</script>";
    }else {
        echo "<script>alert('ERROR: No se pudo registrar el libro...');</script>";
    }
}
if (isset($_POST['btnEliminar'])) {  
    include("global/conexion.php");
    $ID=$_POST['txtID'];
    $consulta = $pdo->prepare("DELETE FROM `tblproductos` WHERE `tblproductos`.`ID` = :ID");
    $consulta->bindParam('ID',$ID,PDO::PARAM_INT);
    if ($consulta->execute()) {
        echo "<script>alert('Libro Eliminado...');</script>";
    }else {
        echo "<script>alert('ERROR: No se pudo eliminar el libro...');</script>";
    }
}

?>