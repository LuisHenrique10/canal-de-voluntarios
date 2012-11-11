<?php

    include "../../class/DAO/NoticiaDAO.php";

    $notDAO = new NoticiaDAO();
    
    $id_noticia = $_REQUEST['id'];
    
    $notDAO->Deleta($id_noticia);
    
    header("Location: index.php");

?>
