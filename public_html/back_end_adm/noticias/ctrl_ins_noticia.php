<?php

    require '../../class/noticia.php';
    require '../../class/DAO/NoticiaDAO.php';
    
    $noticia = new Noticia();
    
    if(isset($_REQUEST['conteudo'])){
        $noticia->setConteudo($_REQUEST['conteudo']);
    }else{
        $erro[0] = "Conteudo não setado";
    }
    if(isset($_REQUEST['titulo'])){
        $noticia->setTitulo($_REQUEST['titulo']);
    }else{
        $erro[1] = "Titulo não setado";
    }
    if(isset($_REQUEST['foto'])){
        $noticia->setImagens($_FILES['foto']);
    }else{
        $erro[3] = "Imagens não foram upadas";
    }
    
    $noticiaDAO = new NoticiaDAO();
    
    $noticiaDAO->Insere($noticia);
    
    header("Location: index.php");

?>
