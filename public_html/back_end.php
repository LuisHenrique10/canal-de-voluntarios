
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

	</head>




	


<body>

<div class="content">


<div class="hero-unit">
  <h1>Área Restrita</h1>
  <p></p>
  <p id="access">
    <a href="#myModal" role="button" class="btn btn-primary btn-large" data-toggle="modal">ACESSAR</a>
  </p>
</div>

<!-- Button to trigger modal -->
</div>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">ADMINISTRADOR</h3>
  </div>
  <div class="modal-body">
   <form name="cadastro_pessoafisica" id="form_adm" method="post" action="main_adm.php" class="form-horizontal" >
  <div class="control-group">
    <label class="control-label" for="user">NOME DE USUÁRIO</label>
    <div class="controls">
      <input type="text" placeholder="..." id="user">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="senha">SENHA</label>
    <div class="controls">
      <input type="password" id="senha" placeholder="">
    </div>
  </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">SAIR</button>
    <button type="submit" class="btn">LOGAR</button>
    </form>
  </div>
</div>


</body>
</html>