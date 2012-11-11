<?php
    require '../libs/ctrl_protect_pages.php';
    //protegePagina();
?>

<html lang="pt-br">
  <head>
		<?php include 'includes/head.html'; ?>
                <title>Login adm</title>
	</head>
  <body>
            
            <div id="maincontent">
			<div id="header">
			</div>
			<div id="content">
                            <div id="form_login">
                                <h1 id="area_rest">Área Restrita</h1>
                                <form name="login" action="ctrl_do_login_adm.php" method="post">
                                        Login: <input name="login" type="text"/><br/>
                                        Senha: <input name="senha" type="password" /><br/>
                                        <input type="submit" value="Login"/>
                                </form>
                            </div>
                        </div>
			<div id="footer">
				<?php include 'includes/footer.html'; ?>
			</div>
                </div>
  </body>
</html>