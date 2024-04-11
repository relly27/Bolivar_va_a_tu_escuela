<?php

include 'vistas/header.php';

$archivo = "contador/archivo.txt";
$contador = intval(trim(file_get_contents($archivo)));

$file = fopen($archivo, "w");
fwrite($file, $contador + 1 . PHP_EOL);

$file = fopen($archivo, "r");

?>


    <div class="container__body">
        
        <section class="descripcion">

            <!--<div class="container__cuadro--descripcion">
                <div class="cuadro--descripcion"></div>
            </div>-->

            <div class="container__texto--descripcion">
                <h1>
                El lugar donde nació el Libertador Simón Bolívar el 24 de julio de 1783. Ha sido transformado en museo donde se exhiben piezas originales de la casa y algunas prendas que pertenecieron al Libertador, hoy se le conoce como la “Casa Natal del Libertador. <br><br>

                Fue construida en el año 1643, es de una sola planta y posee 14 habitaciones. En esta casa de estilo colonial, Simón Bolívar pasó su infancia, entre juegos y lecciones de sus maestros Andrés Bello y Simón Rodríguez. En el año 1792 la familia Bolívar la desocupó a raíz de la muerte de la madre del Libertador. En 1806 es adquirida por Juan de la Madriz, familiar de los Bolívar. <br>
                </h1>
            </div>
        </section><br><br>

        <div class="video_banner">
            <video autoplay controls loop muted playsinline src="./video/Copia de Copia de PRESENTA(11).mp4" type="video/mp4"></video>
        </div>

        <div class="Carousel">
            <h2>Exposiciones</h2><br>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a href="img/galeria/CNL-0048-1-Inmaculada-Concepcion.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/CNL-0048-1-Inmaculada-Concepcion.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-248-1-Tambor.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-248-1-Tambor.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-240-1-Medalla.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-240-1-Medalla.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-227-Maria-Teresa-del-Toro.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-227-Maria-Teresa-del-Toro.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-174-1-Sable.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-174-1-Sable.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-234-Insignia.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-234-Insignia.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-259-Cañon.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-259-Cañon.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/SM-257-Busto-del-Libertador.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/SM-257-Busto-del-Libertador.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/MBOL-NUMIS-0075-2-Moneda.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/MBOL-NUMIS-0075-2-Moneda.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/MBOL-0259-Los-Lanceros-de-Paez.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/MBOL-0259-Los-Lanceros-de-Paez.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/MBOL-0086-2-Guerrera-que-pertenecio-al-General-Jose-Antonio-Paez.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/MBOL-0086-2-Guerrera-que-pertenecio-al-General-Jose-Antonio-Paez.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/MBOL-0055-1-Ramos-de-Chamberlain-Eulalia.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/MBOL-0055-1-Ramos-de-Chamberlain-Eulalia.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/CUBOL-0077-2-Baul-de-campaña-con-las-iniciales-J-R-R.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/CUBOL-0077-2-Baul-de-campaña-con-las-iniciales-J-R-R.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/CNL-0072-2-Bolivar-Simon.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/CNL-0072-2-Bolivar-Simon.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="img/galeria/CNL-0034-Expedicion-de-los-Cayos-el-abordaje-del-Bergantin-Intrepido.jpg">
                                <h4><small>Galeria</small>VER</h4>
                                <picture>
                                    <img src="img/galeria/CNL-0034-Expedicion-de-los-Cayos-el-abordaje-del-Bergantin-Intrepido.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button>
            </div>
        </div>

        <div class="container__visita_guiada">

            <div class="titulo--visita_guiada">
                <h1>Invitación</h1>
            </div>

            <div class="visita_guiada">
                <div class="visita">
                    <video autoplay controls loop muted playsinline src="./video/video_banner.mp4" type="video/mp4"></video>
                </div>
            </div>

        </div>

        <section class="contador_visitas">

            <div class="container__contador">

                <p>
                    <?php

                        echo fgets($file);
                        fclose($file);

                    ?>
                </p>
                <h3>Visitas</h3>
                <div class="container__linea">
                    <div class="linea"></div>
                </div>
            </div>

        </section>

        <div class="enviarc">

                 <a class="desc" href="img/Certificado__Bolivar.pdf" download="img/certificado-bolivar.pdf">Descargar Certificado</a>

        </div>

    </div>

<?php

include 'vistas/footer.php';

?>