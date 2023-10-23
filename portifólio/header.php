<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $titulo; ?></title>
        <script src="https://kit.fontawesome.com/23e7e38b71.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="logos/logopagina.png" type="image/x-icon">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

    </head>
    
    <body>

        <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=554136534327" target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>

        <header class="header">
            <a href="index.php" class="logo">
                <img src="logos/usinik.png" width="134" height="60">
            </a>
            <nav class="nav">
                <input type="checkbox" id="checkbox" class="checkbox"/>
                <label for="checkbox" class="label-menu">Menu<span class="hamburger"></span></label>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="maquinas.php">Maquinas</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </header>

    </body>
</html>