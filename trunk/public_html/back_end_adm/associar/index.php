<?php
    require '../../libs/ctrl_protect_pages.php';
    //protegePagina();
?>

<html lang="pt-br">
    <head>
        <?php include '../includes/head.html'; ?>
        <title>:: Associar Entidades e Voluntários ::</title>
    </head>
    <body>
        <div id="container">
            
            <div id="associa_div">
                <?php 
                
                require '../../libs/phpmysqlconnect.php';
                
                $sql = new phpmysqlconnect();
                
                $sql->connect();
                
                $query = 'SELECT `id_nec` FROM `necessidades`';
                
                $qtd_necessidades = $sql->get_result();
                
                $sql->run_query($query);
                
                foreach ($qtd_necessidades as $necessidades) {
                    
                    $query = 'SELECT `vf`.`nome` 
                              FROM `vol_fis_supre_nec` vfsn JOIN `voluntario_fisico` vf 
                              ON `vfsn`.`id_volfis` = `vf`.`id_volfis` 
                              AND `vfsn`.`id_nec` = '.$necessidades['id_nec'].'
                              ORDER BY `vf`.`regiao`';
                    
                    echo 
                    '<div class="mostra_entidade">
                        '.$necessidades['id_nec'].'
                    </div>
                    <div class="mostra_voluntario">

                    </div>';
                }
                    
                
                
                
                
                
                ?>
            </div>
            
        </div>
    </body>
</html>