<?php
include 'global/sesiones.php';
include 'templates/cabecera.php';
error_reporting(E_ERROR | E_PARSE);
?>


<section class="u-clearfix u-grey-5 u-section-2" id="carousel_fa12">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-top-sm u-container-layout-1">
                      <img class="u-image u-image-contain u-image-default u-image-1" src="img/LogoLibroAzul.svg" alt="" data-image-width="480" data-image-height="720"><span "></span>
                    </div>
                  </div>
                  <div class="u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                      <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1"><br>Sobre nosotros</h2>
                      <h6 class="u-custom-font u-font-raleway u-text u-text-2">Misión</h6>
                      <p class="u-align-justify u-custom-font u-font-montserrat u-text u-text-3"> Books es una empresa que comercia con libros de Programación desde lo más básico hasta la experticia, el formato de nuestros libros es PDF, así garantizamos que nuestro producto te llegue de manera inmediata sin tiempos de espera o envíos.</p>
                      <br>
                      <h6 class="u-custom-font u-font-raleway u-text u-text-2">Visión</h6>
                      <p class="u-align-justify u-custom-font u-font-montserrat u-text u-text-3"> Books quiere que tengas la comodidad de compra de tus libros sin necesidad de hacer filas, además contribuyes al planeta por la compra de tu libro digital. Queremos llegar a ser una internacional y abrir más secciones de libros, atender más areas para cubrir las necesidades de los más pequeños con grandes aspiraciones hasta las personas con más experimentadas en busca de ampliar su conocimiento .</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-justify u-container-style u-layout-cell u-size-60 u-white u-layout-cell-3">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <p class="u-custom-font u-font-montserrat u-text u-text-4"> Ten tus libros al alcance de tu mano en formato digital, lee cuando quieras y donde quieras, una buena lectura en cualquier momento del día. ¡Anímate y haz tu compra con nosotros!.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-4f2d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="400" data-image-height="265">
                <div class="u-container-layout u-valign-top u-container-layout-1"></div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-1">Nuestra sede física</h2>
                  <p class="u-text u-text-default u-text-2">Puedes encontrarnos en la ciudad de Popayán.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<h1 align="center">Estamos ubicados aquí!</h1>

<div id="map"></div>
<script src="JavaScript/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
<br>
<?php
include 'templates/pie.php'
?>