<?php
require '../libs/ctrl_protect_pages.php';

//protegePagina();
?>
<html lang="pt-br">
    <head>
        <title>:: Backend - Canal de Voluntários ::</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>		
        <link href="../css/styles.css" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="container">

            <div id="header">
            </div>
            <div id="menu">
                <a class="btn btn-navbar" href="main_adm.php">Home Admin</a>
                <a class="btn btn-navbar" href="noticias/index.php">Noticias</a>
                <a class="btn btn-navbar" href="#">Entidades</a>
                <a class="btn btn-navbar" href="#">Voluntários</a>
                <a class="btn btn-navbar" href="#">Feedbacks</a>
            </div>

            <div id="content">
                <?php
                echo 'Olá   ' . utf8_encode($_SESSION['usuarioNome']);
                ?>
            </div>
            <div id="footer">
                <?php include 'includes/footer.html'; ?>
            </div>
        </div>

    </body>
</html>
