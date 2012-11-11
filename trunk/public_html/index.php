<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/script.js"></script>		
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <title>: Canal do voluntário :</title>
    </head>
    <body>
        <div class="container a">
            <img src="img/header_internacional.png" class="header_jci"> 

            <div class="container-fluid">


                <div class="row-fluid">

                    <div class="span2">

                        <ul class="nav nav-pills f">
                            <li class="active">
                                <a href="index.php" class="btn-large">HOME</a>
                            </li>
                            <li class="active">
                                <a href="# " class="btn-large" onclick="load(1);return false;">ENTIDADE</a>
                            </li>
                            <li class="active">
                                <a href="#" class="btn-large" onclick="load(2);return false;">VOLUNTÁRIO</a>
                            </li>
                            <li class="active">
                                <a href="#" class="btn-large" onclick="load(3);return false;">NOTÍCIAS</a>
                            </li>
                            <li class="active">
                                <a href="#" class="btn-large" onclick="load(4);return false;">SOBRE NÓS</a>
                            </li>
                            <li class="active">
                                <a href="#" class="btn-large" onclick="load(5);return false;">CONTATO</a>

                            </li>
                            <li class="active">
                                <a href="#" class="btn-large" onclick="load(10);return false;">components</a>

                            </li>
                            <br />
                            <li class="nav-header">LOGIN</li>

                            <form name="cadastro_pessoafisica" id="form_pfisica" method="post" action="logar.php" class="form-horizontal" >





                                <input name="login" class="span12 user" type="text" placeholder="username"><br />
                                <input name="login" class="span8" type="text" placeholder="senha"><input class="span3" type="submit" value="Ir" id="ir">

                            </form>

                        </ul>



                    </div>






                    <div class="span10 c" id="div1">



                        <h1 class="page-header">Canal do Voluntário</h1>
                        Em Londrina, há muitas pessoas que querem ajudar e não sabem como e há muitas entidades que precisam de ajuda e não recebem. O projeto Canal de Voluntários tem como propósito integrar voluntários e entidades que realizam trabalhos comunitários de modo a aumentar o impacto dessas organizações. A ideia é realizar visitas para conhecer o dia a dia e as necessidades das entidades e buscar em uma base de dados, voluntários e empresas que possam ajudar.

                        O que é JCI
                        A JCI - Junior Chamber International é uma organização mundial que oferece oportunidades de desenvolvimento que preparam as pessoas jovens para criar mudanças positivas. É formada por mais de 200 mil voluntários de 18 a 40 anos em 115 países, jovens cidadãos ativos dedicados a criar mudanças positivas em suas comunidades. Os membros da JCI assumem a responsabilidade por suas comunidades identificando problemas e criando soluções. Buscando também o desenvolvimento contínuo de seus membros por meio de projetos e capacitação, os membros da JCI vivem a missão de criar mudanças positivas e o slogan Be Better, Ser Melhor, para fazer cada vez mais pela comunidade.

                        <br />
                        <br />
                        <a href="#" onclick="load(8);return false;">Voluntario logado</a><br /><br />
                        <a href="#" onclick="load(9);return false;">entidade logada</a><br /><br />
                        <a href="back_end.php" >Back End</a>

                    </div>
                </div>
            </div>

            <div class="footer">
                <HR>
                <h1>FOOTER</h1>
            </div>

        </div>







    </body>
</html>
