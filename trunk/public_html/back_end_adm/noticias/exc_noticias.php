<!doctype html public "-//w3c//dtd HTML 4.0 Transitional//EN">
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="../../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../../js/script.js"></script>
        <link href="../../css/styles.css" rel="stylesheet"/>
        <link href="../../css/styles2.css" rel="stylesheet"/>
        <link href="../../css/bootstrap.min.css" rel="stylesheet"/>
        <script src="../../js/bootstrap.min.js"></script>
        <title>Excluir notícias</title>
    </head>
    <body>
        <div id="maincontent">
            <table id="mostrar_noticias">
                <thead>
                    <tr>
                        <th>Titúlo</th>
                        <th>Data</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    include '../../class/DAO/NoticiaDAO.php';
                    $noticiaDAO = new NoticiaDAO();
                    foreach ($noticiaDAO->Lista() as $noticia) {
                        echo'
                        <tr>
                            <td>' . $noticia['titulo'] . '</td>
                            <td>' . $noticia['data_criada'] . '</td>
                            <td><a href="ctrl_exc_noticia.php?id=' . $noticia['id_noticia'] . '"> <span class="btn-danger">Excluir</span></a> </td>
                        </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>