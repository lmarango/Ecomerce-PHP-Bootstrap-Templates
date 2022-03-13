<?php
include 'global/conexion.php';
include 'global/sesiones.php';
include 'templates/cabecera.php';
?>
<br>
<h1 align="center"> ¡Bienvenido a BOOKS! </h1>

<h3 class="u-align-justify u-custom-font u-font-montserrat u-text u-text-3">Hola amante del código, nos alegra tener aquí. Se libre de mirar todos nuestros productos, recuerda que debes estar registrado para realizar cualquier compra.</h3>
<br>
<h4 class="u-align-justify u-custom-font u-font-montserrat u-text u-text-3">En BOOKS encontraras libros sobre Programación de las temáticas que ves en pantalla. Ve al apartado Productos para observar el catálogo disponible.</h4>
<br>
<div class="container" class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/bootstrap.jpg" class="d-block w-100" alt="bootstrap" width="620px" height="450px">
                    </div>
                    <div class="carousel-item">
                        <img src="img/htmlcss.png" class="d-block w-100" alt="..." width="620px" height="450px">
                    </div>
                    <div class="carousel-item">
                        <a href="https://developer.mozilla.org/es/docs/Web/JavaScript" target="_blanck">
                            <img src="img/js.png" class="d-block w-100" alt="..." width="620px" height="450px">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<br>
<?php
include 'templates/pie.php';
?>