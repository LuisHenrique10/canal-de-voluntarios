<!doctype html public "-//w3c//dtd HTML 4.0 Transitional//EN">
<html>
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
		<form name="vol_avalia" id="cadastro_form" method="post" action="vol_avaliacao.php" class="form-horizontal" >

				<fieldset name="avaliacao" class="form2">

					<legend for="avaliacao">AVALIAÇÃO</legend>

					Voluntário<?php echo $_GET['aux']; ?>

						<div class="control-group">


							<label for="data" class="control-label label3" >Data</label>

							<div class="controls">
								<input type="date" name="data" class"input1"/>
							</div>

						</div>

						<div class="control-group">

							<label for="comentario" class="control-label label3" >Comentário</label>

							<div class="controls">
								<textarea type="text" name="comentario" rows="7" class"input1"></textarea>
							</div>

						</div>

						
							
							<input type="submit" name="confirmar" value="Enviar" class="btn btn-primary botao2" />
						
					</fieldset>
		<form>


	</body>
</html>