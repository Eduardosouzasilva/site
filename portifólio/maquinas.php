<?php
/**
    arquivo : maquinas.php
    autor   : Eduardo.Souza
    versao  : 1.0.0
    data    : 20/10/2023
*/

$titulo = "Maquinas | Usinik";

include "header.php";
?>

<html>
    <head>
    </head>

    <body>
        <div class="container">
            <i class="icones fa-solid fa-screwdriver-wrench"></i>
            <div class="titulo-divs">
                <h4>NOSSAS MAQUINAS</h4>
            </div>
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/torno_cnc.png" alt="torno_cnc">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    TORNO CNC
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/centro_torneamento.png" alt="centro_torneamento">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    CENTRO DE TORNEAMENTO
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/centro_usinagem.png" alt="centro_usinagem">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    CENTRO DE USINAGEM
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/fresa_ferramenteira.png" alt="fresa_ferramenteira">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    FRESA FERRAMENTEIRA
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/torno_convencional.png" alt="torno_convencional">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    TORNO CONVENCIONAL
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/rosqueadeira.png" alt="rosqueadeira">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    ROSQUEADEIRA ELÉTRICA
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/serra_fita.png" alt="serra_fita">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    SERRA FITA MANUAL / AUTOMATICO
                    </p>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img class="img-fluid mb-4 shadow rounded" src="imagens/maquinas/serra_circular.png" alt="serra_circular">
                </div>
                <div class="desc-maquina col-sm-12 col-md-6 col-lg-6">
                    <p>
                    SERRA CIRCULAR PARA ALUMINIO MANUAL / AUTOMATICO
                    </p>
                </div>

            </div>
        </div>
    </body>
</html>

<?php
include "footer.php";
?>