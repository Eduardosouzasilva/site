<?php
/**
    arquivo : contato.php
    autor   : Eduardo.Souza
    versao  : 1.0.0
    data    : 20/10/2023
*/

$titulo = "Contato | Usinik";

include "header.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <script defer src="app.js"></script>
    </head>

    <body>
        <div class="cotainer">
            <div id="div_contato">
                <div class="email">
                    <h4>
                        <strong>Entrar em Contato!</strong>
                    </h4>
                    <form action="https://formsubmit.co/ajax/ecommerce@usinik.com.br" method="POST" data-form>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" required>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" required>
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" required></textarea>
                        <button type="submit" data-button>Enviar</button>
                    </form>
                </div>
                <div class="mapa">
                    <h4>
                        <strong>Mapa</strong>
                    </h4>
                    <div class="container-form">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.528650335209!2d-49.17243572577653!3d-25.454017333840206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcefd7cba57f4f%3A0xaf614f617de79a81!2sUSINIK%20-%20Usinagem%20Industrial!5e0!3m2!1spt-BR!2sbr!4v1697478981604!5m2!1spt-BR!2sbr" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
include "footer.php";
?>