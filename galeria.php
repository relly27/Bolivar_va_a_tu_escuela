<?php

include 'vistas/header.php';

?>


<div class="container__body">

    <div class="container__titulo_galeria">
        <h1>Galería de Imagenes</h1>
    </div>
    
    <div class="container_galeria">
        <?php
        foreach (glob("img/galeria/*.jpg") as $filename) { ?>
            
            
                <div class="container__img_galeria">
                    <a href="<?php echo $filename ?>" target="__blank">
                        <img src="<?php echo $filename ?>" alt="Imagen de Galería" class="galeria__img">
                    </a>
                </div>
            
            
        <?php
        }
        ?>

    </div>
    

</div>

<?php

include 'vistas/footer.php';

?>