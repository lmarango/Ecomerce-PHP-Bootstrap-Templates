<?php
include 'templates/cabecera.php';
error_reporting(E_ERROR | E_PARSE);
?>

<link rel="stylesheet" type="text/css" href="estilos/estiloContacto.css">

<form action="correo.php" method="POST" >
    <div class="form">
        <h1>Contactanos</h1>
        <div class="grupo">
            <input type="text" name="nombre" id="" required><span class="barra"></span>
            <label>Nombre</label>
        </div>
        <div class="grupo">
            <input type="email" name="correo" id="" required><span class="barra"></span>
            <label>Email</label>
        </div>
        <div class="grupo">
            <input type="text" name="asunto" id="" required><span class="barra"></span>
            <label>Asunto</label>
        </div>
        <div class="grupo">
            <textarea name="mensaje" id="" rows="3" required></textarea><span class="barra"></span>
            <label>Mensaje</label>
        </div>
        <button type="submit">Enviar</button>
    </div>
</form>

<?php
include 'templates/pie.php'
?>