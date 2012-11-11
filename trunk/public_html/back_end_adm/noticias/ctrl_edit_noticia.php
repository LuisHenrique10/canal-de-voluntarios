<?php

        require '../../class/noticia.php';
        require '../../class/DAO/NoticiaDAO.php';

        $noticia = new Noticia();

        if (isset($_REQUEST['conteudo'])) {
            $noticia->setConteudo($_REQUEST['conteudo']);
        } else {
            $erro[0] = "Conteudo não setado";
        }
        if (isset($_REQUEST['titulo'])) {
            $noticia->setTitulo($_REQUEST['titulo']);
        } else {
            $erro[1] = "Titulo não setado";
        }
        if (isset($_REQUEST['id_noticia'])) {
            $noticia->setId($_REQUEST['id_noticia']);
        } else {
            $erro[3] = "Sem id!";
        }
        if (count($erro) > 0) {
            $_REQUEST['erros'] = $erro;
            header("Location: erro.php");
        } else {
            $noticiaDAO = new NoticiaDAO();
            $noticiaDAO->Update($noticia);
            header("Location: index.php");
        }
?>
