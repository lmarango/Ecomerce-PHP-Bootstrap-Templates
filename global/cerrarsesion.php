<?php
session_start(['usuario', 'CARRITO']);
session_destroy();
header('Location:/admintienda/index.php');
?>