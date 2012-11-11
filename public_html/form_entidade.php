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
		<form name="cadastro_entidade" id="cadastro_form" method="post" action="cadastrar_entidade.php" class="form-horizontal" >

				<fieldset name="dados_entidade" class="form1">

					<legend for="dados_entidade">ENTIDADE </legend>

					<div id="coluna_esquerda">

						<div class="control-group">

							<label for="razao" class="control-label" >Razão</label>

							<div class="controls">
								<input type="text" name="razao"/>
							</div>

						</div>

						<div class="control-group">

							<label for="responsavel" class="control-label" >Responsável</label>

							<div class="controls">
								<input type="text" name="responsavel"/>
							</div>

						</div>

						<div class="control-group">

							<label for="logradouro" class="control-label" >Logradouro</label>

							<div class="controls">
								<input type="text" name="logradouro"/>
							</div>

						</div>

						<div class="control-group">

							<label for="cidade" class="control-label" >Cidade</label>

							<div class="controls">
								<input type="text" name="cidade" placeholder="LONDRINA"/>
							</div>

						</div>

						<div class="control-group">

							<label for="email" class="control-label" >E-mail</label>

							<div class="controls">
								<input type="text" name="email"/>
							</div>

						</div>

						<div class="control-group">

							<label for="telefone" class="control-label" >Telefone</label>

							<div class="controls">
								<input type="text" name="telefone" placeholder="(XX) XXXX-XXXX"/>
							</div>

						</div>

						



					</div>

					<div id="coluna_direita">
						<div class="control-group">

							<label for="cpf" class="control-label" >CNPJ</label>

							<div class="controls">
								<input type="text" name="cpf"/>
							</div>

						</div>

						
						<div class="control-group">

							<label for="bairro" class="control-label" >Bairro</label>

							<div class="controls">
								<input type="text" name="bairro"/>
							</div>

						</div>

						<div class="control-group">

							<label for="regiao" class="control-label" >Região</label>

							<div class="controls">
								<select name="regiao" class="selec">
								<option value="0">--SELECIONAR--</option>
								<option value="1">NORTE</option>
								<option value="2">SUL</option>
								<option value="3">---</option>
								<option value="4">---</option>
								<option value="5">---</option>
								<option value="6">---</option>
								</select>
							</div>

						</div>

						<div class="control-group">

							<label for="fundacao" class="control-label" >Data de Fundação</label>

							<div class="controls">
								<input type="text" name="fundacao"/>
							</div>

						</div>

						<div class="control-group">

							<label for="site" class="control-label" >Site</label>

							<div class="controls">
								<input type="text" name="site"/>
							</div>

						</div>


					</div>

				
				</fieldset>
				<fieldset name="beneficiados_" class="form1">
					<legend for="beneficiados_">BENEFICIADOS</legend>

					<div class="control-group">

							<label for="beneficiados" class="control-label label2" >Público Beneficiado</label>

							<div class="controls">
								<label class="checkbox inline" > <input name="beneficiados" type="checkbox" value="1" class="" /> Idosos </label> 
			     				<label class="checkbox inline" > <input name="beneficiados" type="checkbox" value="2" class="" /> Crianças </label>
			     				<label class="checkbox inline" > <input name="beneficiados" type="checkbox" value="3" class="" /> Deficientes </label>
							</div>

						</div>
					

					    <div class="control-group">

							<label for="quantidade_beneficiados" class="control-label label2" >Numero de beneficiados</label>

							<div class="controls">
								<input type="text" name="quantidade_beneficiados"/>
							</div>

						</div>

						<div class="control-group">

							<label for="necessidades" class="control-label label2" >Necessidades </label>

							<div class="controls">
								<label class="checkbox inline" > <input name="necessidades" type="checkbox" value="1" class="" /> Alimento </label> 
			     				<label class="checkbox inline" > <input name="necessidades" type="checkbox" value="2" class="" /> Vestuário </label>
			     				<label class="checkbox inline" > <input name="necessidades" type="checkbox" value="3" class="" /> .... </label>
							</div>

						</div>

						<div class="control-group">

							<label for="xp_anterior" class="control-label label2" >Já recebeu apoio?</label>

							<div class="controls">
								<label class="checkbox inline" > <input name="xp_anterior" type="radio" value="1" class="" /> Sim </label> 
			     				<label class="checkbox inline" > <input name="xp_anterior" type="radio" value="2" class="" /> Não </label>
							</div>

						</div>

						<div class="control-group">

							<label for="tipo_apoio" class="control-label label2" >Tipo de Apoio </label>

							<div class="controls">
								<label class="checkbox inline" > <input name="tipo_apoio" type="checkbox" value="1" class="" /> Municipal </label> 
			     				<label class="checkbox inline" > <input name="tipo_apoio" type="checkbox" value="2" class="" /> Federal </label>
			     				<label class="checkbox inline" > <input name="tipo_apoio" type="checkbox" value="3" class="" /> Privado </label>
							</div>

						</div>


						<div class="control-group">

							<label for="funcionamento" class="control-label label2" >Dias de funcionamento</label>

							<div class="controls">
								<table class="table table-striped">
									<tr>
										<td> </td> <td>SEG </td> <td>TER </td> <td>QUA</td> <td>QUI </td> <td>SEX</td> <td>SA </td> <td>DO </td>
									</tr>
									<tr>
										<td>7h </td> <td><input name="funcionamento" type="checkbox" value="1" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="2" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="3" class="" /></td> <td><input name="funcionamento" type="checkbox" value="4" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="5" class="" /></td> <td><input name="funcionamento" type="checkbox" value="6" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="7" class="" /> </td>
									</tr>

									<tr>
										<td>12h </td> <td><input name="funcionamento" type="checkbox" value="8" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="9" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="10" class="" /></td> <td><input name="funcionamento" type="checkbox" value="11" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="12" class="" /></td> <td><input name="funcionamento" type="checkbox" value="13" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="14" class="" /> </td>
									</tr>

									<tr>
										<td>15h </td> <td><input name="funcionamento" type="checkbox" value="15" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="16" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="17" class="" /></td> <td><input name="funcionamento" type="checkbox" value="18" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="19" class="" /></td> <td><input name="funcionamento" type="checkbox" value="20" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="21" class="" /> </td>
									</tr>

									<tr>
										<td>19h </td> <td><input name="funcionamento" type="checkbox" value="23" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="24" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="25" class="" /></td> <td><input name="funcionamento" type="checkbox" value="26" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="27" class="" /></td> <td><input name="funcionamento" type="checkbox" value="28" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="29" class="" /> </td>
									</tr>

									<tr>
										<td>Após 19h </td> <td><input name="funcionamento" type="checkbox" value="31" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="32" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="33" class="" /></td> <td><input name="funcionamento" type="checkbox" value="34" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="35" class="" /></td> <td><input name="funcionamento" type="checkbox" value="36" class="" /> </td> <td><input name="funcionamento" type="checkbox" value="37" class="" /> </td>
									</tr>


								</table>
							</div>

						</div>

						
					

				</fieldset>

				<div class="form-actions botoes">
					<a href="index.html" class="btn btn-danger">Voltar</a>
					<input type="submit" name="confirmar" id="botao" value="Cadastrar" class="btn enviar" />
				</div>

			
		<form>


	</body>
</html>