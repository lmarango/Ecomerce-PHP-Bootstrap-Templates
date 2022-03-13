<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo "redirigir a Login... no hay usuario";
    header('Location:index.php');
}else{
    //print_r($_SESSION['usuario']['nombre']);
}
?>