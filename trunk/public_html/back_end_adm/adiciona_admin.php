<?php

require '../libs/phpmysqlconnect_local.php';

    if (isset($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    }
    if (isset($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
        
        if (isset($_REQUEST['senha'])) {
            $senha = $_REQUEST['senha'];
        }
            
        $sql = new phpmysqlconnect();
        
        $sql->connect();
        
        $query = "INSERT INTO `web_admin` (`nome`, `login`, `senha`) 
            VALUES ('".$nome."', '".$login."', '".md5($senha)."');";
        
        if( $sql->run_query($query) ){
            header("Location: index.php?suc=true");
        }  else {
            header("Location: index.php?suc=false");
        }
        
    }else{
        header("Location: ../index.php?insert=fail");
    }
?>
