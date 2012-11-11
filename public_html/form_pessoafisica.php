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
		<form name="cadastro_pessoafisica" id="cadastro_form" method="post" action="cadastrar_pessoafisica.php" class="form-horizontal" >

				<fieldset name="dados_pessoais" class="form1">

					<legend for="dados_pessoais">DADOS PESSOAIS</legend>

					<div id="coluna_esquerda">

						<div class="control-group">

							<label for="nome" class="control-label" >Nome</label>

							<div class="controls">
								<input type="name" name="nome"/>
							</div>

						</div>

						<div class="control-group">

							<label for="email" class="control-label" >E-mail</label>

							<div class="controls">
								<input type="email" name="email"/>
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

							<label for="telefone" class="control-label" >Telefone</label>

							<div class="controls">
								<input type="text" name="telefone" placeholder="(XX) XXXX-XXXX"/>
							</div>

						</div>

						<div class="control-group">

							<label for="profissao" class="control-label" >Profissão</label>

							<div class="controls">
								<input type="text" name="profissao"/>
							</div>

						</div>

						<div class="control-group">

							<label for="atuacao" class="control-label" >Área de atuação</label>

							<div class="controls">
								<select name="atuacao" class="selec">
								<option value="0">--SELECIONAR--</option>
								<option value="1">Saúde</option>
								<option value="2">---</option>
								<option value="3">---</option>
								<option value="4">---</option>
								<option value="5">---</option>
								<option value="6">Outro</option>
								</select>
							</div>

						</div>




					</div>

					<div id="coluna_direita">
						<div class="control-group">

							<label for="cpf" class="control-label" >CPF</label>

							<div class="controls">
								<input type="text" name="cpf"/>
							</div>

						</div>

						<div class="control-group">

							<label for="nascimento" class="control-label" >Data de Nascimento</label>

							<div class="controls">
								<input type="text" name="nascimento"/>
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

							<label for="celular" class="control-label" >Celular</label>

							<div class="controls">
								<input type="text" name="celular" placeholder="(XX) XXXX-XXXX"/>
							</div>

						</div>


					</div>

				
				</fieldset>
				<fieldset name="voluntariado" class="form1">
					<legend for="voluntariado">VOLUNTARIADO</legend>
					<div id="volutariado_">

					    <div class="control-group">

							<label for="jci" class="control-label label2" >Como soube da JCI?</label>

							<div class="controls">
								<input type="text" name="jci"/>
							</div>

						</div>

						<div class="control-group">

							<label for="xp_anterior" class="control-label label2" >Tem experiência com voluntariado?</label>

							<div class="controls">
								<label class="checkbox inline" > <input name="xp_anterior" type="radio" value="1" class="" /> Sim </label> 
			     				<label class="checkbox inline" > <input name="xp_anterior" type="radio" value="2" class="" /> Não </label>
							</div>

						</div>

						<div class="control-group">

							<label for="descricao" class="control-label label2" >Caso tenha experiência descreva-a:</label>

							<div class="controls">
								<textarea type="text" name="descricao" rows="7" placeholder="<Texto exemplo>"></textarea>
							</div>

						</div>


						<div class="control-group">

							<label for="publico_alvo" class="control-label label2" >Público que deseja ajudar:</label>

							<div class="controls">
								<label class="checkbox inline" > <input name="publico_alvo" type="checkbox" value="1" class="" /> Idosos </label> 
			     				<label class="checkbox inline" > <input name="publico_alvo" type="checkbox" value="2" class="" /> Crianças </label>
			     				<label class="checkbox inline" > <input name="publico_alvo" type="checkbox" value="3" class="" /> Deficientes </label>
							</div>

						</div>


						<div class="control-group">

							<label for="disponibilidade" class="control-label label2" >Disponibilidade para ajudar</label>

							<div class="controls">
								<table class="table table-striped">
									<tr>
										<td> </td> <td>SEG </td> <td>TER </td> <td>QUA</td> <td>QUI </td> <td>SEX</td> <td>SA </td> <td>DO </td>
									</tr>
									<tr>
										<td>7h </td> <td><input name="disponibilidade" type="checkbox" value="1" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="2" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="3" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="4" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="5" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="6" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="7" class="" /> </td>
									</tr>

									<tr>
										<td>12h </td> <td><input name="disponibilidade" type="checkbox" value="8" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="9" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="10" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="11" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="12" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="13" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="14" class="" /> </td>
									</tr>

									<tr>
										<td>15h </td> <td><input name="disponibilidade" type="checkbox" value="15" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="16" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="17" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="18" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="19" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="20" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="21" class="" /> </td>
									</tr>

									<tr>
										<td>19h </td> <td><input name="disponibilidade" type="checkbox" value="23" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="24" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="25" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="26" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="27" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="28" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="29" class="" /> </td>
									</tr>

									<tr>
										<td>Após 19h </td> <td><input name="disponibilidade" type="checkbox" value="31" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="32" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="33" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="34" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="35" class="" /></td> <td><input name="disponibilidade" type="checkbox" value="36" class="" /> </td> <td><input name="disponibilidade" type="checkbox" value="37" class="" /> </td>
									</tr>


								</table>
							</div>

						</div>

						<div class="control-group">

							<label for="frequencia" class="control-label label2" >Frequência</label>

							<div class="controls">
								<label class="checkbox inline" > <input name="frequencia" type="radio" value="1" class="" /> Toda semana </label> 
			     				<label class="checkbox inline" > <input name="frequencia" type="radio" value="2" class="" /> Esporadicamente </label>
							</div>

						</div>

						<div class="control-group">

							<label for="auto_descricao" class="control-label label2" >Faça uma descrição pessoal:</label>

							<div class="controls">
								<textarea type="text" name="auto_descricao" rows="7"></textarea>
							</div>

						</div>

						<div class="control-group">

							<label for="tipo_ajuda" class="control-label label2" >Tido de ajuda</label>

							<div class="controls">
								<input type="text" name="tipo_ajuda" placeholder="Alimentos..."/>
							</div>

						</div>
					<div>

				</fieldset>

				<div class="form-actions botoes">
					<a href="index.html" class="btn btn-danger">Voltar</a>
					<input type="submit" name="confirmar" id="botao" value="Cadastrar" class="btn enviar" />
				</div>
			
		</form>


	</body>
</html>