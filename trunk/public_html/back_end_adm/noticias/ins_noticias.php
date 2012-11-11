<?php
require '../../libs/ctrl_protect_pages.php';
protegePagina();
?>
<html lang="pt-br">
    <head>
        <title>::Inserir notícia::</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../../js/script.js"></script>
        <link href="../../css/styles.css" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <script src="../../js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="maincontent">
            <div id="header">
            </div>
            <div id="menu">
            </div>
            <div id="content">
                <form action="ctrl_ins_noticia.php" method="post" enctype="multipart/form-data" name="adiciona_noticia" >
                    <label for="titulo">Título da noticia</label>
                    <input type="text" name="titulo" /><br /><br />
                    
                    <label for="conteudo">Conteúdo da noticia</label>
                    <textarea cols="250" rows="15" name="conteudo" placeholder="Corpo da notícia"></textarea>
                    
                    <label for="foto">Fotos da notícia</label>
                    <input type="file" name="foto"/><br /><br />
                    
                    <input type="submit" name="inserir" value="Nova notícia" class="btn btn-success"/>
                </form>
            </div>
            <div id="footer">
                <?php include '../includes/footer.html'; ?>
            </div>
        </div>

    </body>
</html>
