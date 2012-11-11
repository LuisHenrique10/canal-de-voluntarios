<?php
    require_once "../../class/noticia.php";
    include '../../libs/ctrl_protect_pages.php';
    include '../../class/DAO/NoticiaDAO.php';

    protegePagina();

    $ndao = new NoticiaDAO();
    $stmt = $ndao->getInstanceById($_REQUEST['id']);
    //die(var_dump($stmt));
?>
<html lang="pt-br">
    <head>
        <title>::Editar notícia::</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../../js/script.js"></script>	
        <link href="../../css/styles.css" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="maincontent" >

            <div id="header">
            </div>
            <div id="menu">
            </div>
            <div id="content">
                <form action="ctrl_edit_noticia.php" method="post" enctype="multipart/form-data" name="adiciona_noticia" >
                    <label for="titulo">Título da noticia</label>
                    <input type="text" name="titulo" value="<?php echo (  $stmt[0]["titulo"]) ; ?>"/><br /><br />

                    <label for="conteudo">Conteúdo da noticia</label>
                    <textarea style="min-width: 600px;"cols="250" rows="15" name="conteudo"><?php echo $stmt[0]["conteudo"] ?></textarea>
                    <br/>
                    <input type="hidden" value="<?php echo $stmt[0]["id_noticia"] ?>" name="id_noticia"/>
                    <input type="submit" name="inserir" value="Editar notícia" class="btn btn-success"/>
                </form>
            </div>
            <div id="footer">
                <?php include '../includes/footer.html'; ?>
            </div>
        </div>

    </body>
</html>
