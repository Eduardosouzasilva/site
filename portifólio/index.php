<?php
/**
    arquivo : index.php
    autor   : Eduardo.Souza
    versao  : 1.0.0
    data    : 20/10/2023
*/

$titulo = "Usinik - Usinagem Industrial";

include "header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="script.js" defer></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    </head>

    <body>

    <!-- Banner Site  -->
    <section class="banner">
        <a href="contato.php" class="botao-banner btn">ENTRE EM CONTATO</a>
    </section>


    <!-- Slide Clientes -->
    <div class="container">
        <div class="titulo-divs">
            <h4>Clientes</h4>
        </div>
        <div class="slider-wrapper">
            <button id="prev-slide" class="slide-button material-symbols-rounded">chevron_left</button>
            <div class="image-list">
                <a href="https://complaser.com.br/" target="_blank"><img src="logos/clientes/comp.png" alt="comp" class="image-item"></a>
                <a href="https://www.dsgnselo.com/" target="_blank"><img src="logos/clientes/dsgnselo.png" alt="dsgnselo" class="image-item"></a>
                <a href="https://www.lumicenteriluminacao.com.br/" target="_blank"><img src="logos/clientes/lumicenter.png" alt="lumicenter" class="image-item"></a>
                <a href="https://www.tuningcars.com.br" target="_blank"><img src="logos/clientes/tuningcars.png" alt="tuningcars" class="image-item"></a>
                <a href="https://vallitech.com.br/" target="_blank"><img src="logos/clientes/vallitech.png" alt="vallitech" class="image-item"></a>
                <a href="https://www.volaremed.com.br/" target="_blank"><img src="logos/clientes/volaremed.png" alt="volaremed" class="image-item"></a>
                <a href="http://www.redchoppers.com.br/" target="_blank"><img src="logos/clientes/redchoppers.png" alt="redchoppers" class="image-item"></a>
                <a href="https://www.puxechic.com.br" target="_blank"><img src="logos/clientes/puxechic.png" alt="puxechic" class="image-item"></a>
                <a href="https://www.progressrail.com/" target="_blank"><img src="logos/clientes/progressrail.png" alt="progressrail" class="image-item"></a>
                <a href="https://www.asclepioshospitalares.com/" target="_blank"><img src="logos/clientes/asclepios.png" alt="asclepios" class="image-item"></a>
                <a href="https://www.hotspotdesign.com.br/" target="_blank"><img src="logos/clientes/hotspot.png" alt="hotspot" class="image-item"></a>
                <a href="https://londonarquivos.com.br/" target="_blank"><img src="logos/clientes/london.png" alt="london" class="image-item"></a>
                <a href="https://www.metalicmedical.com.br/" target="_blank"><img src="logos/clientes/metalic.png" alt="metalic" class="image-item"></a>
            </div>
            <button id="next-slide" class="slide-button material-symbols-rounded">chevron_right</button>
        </div>
        <div class="slider-scrollbar">
            <div class="scrollbar-track">
                <div class="scrollbar-thumb">

                </div>
            </div>
        </div>
    </div>

    </body>
</html>

<?php
include "footer.php";
?>