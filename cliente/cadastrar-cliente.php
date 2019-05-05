<?php

	include_once("conexao.class.php");

	$strSql = "SELECT * from marca order by marca asc;";

	$res = $conn->query($strSql);

?>

<style type="text/css">
	.container{
		background-image: linear-gradient(60deg, #FFF 0%, #2b76b9 37%, #35eb93 65%, #2cacd1 100%);
		border-radius: 15px;
	}

</style>
<div class="container-fluid">
	<h1>Cadastrar Cliente</h1>
	<br>
	<form action="index.php?page=sal-cliente" method="POST" id="form1">
		<input type="hidden" name="acao" value="cadastrar">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="nome_cliente">Nome completo</label>
				<input type="text" class="form-control" style="border-radius: 15px" id="nome_cliente" name="nome_cliente" required placeholder="Nome completo">
			</div>
			<div class="form-group col-md-6">
				<label for="Niki_name">Nome de cliente</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text" style="border-radius: 15px">@</div>
					</div>
					<input type="text" class="form-control"style="border-radius: 15px"  id="Niki_name" maxlength="10" name="Niki_name" required placeholder="Nome de cliente">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<div>
					<label for="cpf_cliente">CPF</label>
					<input pattern="\d{[0-9.]}\.\d{[0-9.]}\.\d{[0-9.]}-\d{[0-9.]}" style="border-radius: 15px" type="text" id="cpf" maxlength="14" name="cpf_cliente" class="form-control" placeholder="digite apenas os números" onkeypress="return isNumberKey(event)">
				</div>
			</div>
			<div class="form-group col-md-6">
				<div>
					<label for="tel_cliente">Telefone</label>
					<input style="border-radius: 15px" type="text" id="tel_cliente" maxlength="20" name="tel_cliente" class="form-control" placeholder="digite apenas os números">
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email_cliente">E-mail</label>
				<input type="email" class="form-control" id="email_cliente" maxlength="40" name="email_cliente" required placeholder="email" style="border-radius: 15px">
			</div>
			<div class="form-group col-md-6">
				<label for="senha_cliente">Senha</label>
				<input type="password" class="form-control" style="border-radius: 15px" id="senha_cliente" maxlength="40" name="senha_cliente" required placeholder="Senha">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="cidade">Cidade</label>
				<input type="text" class="form-control" style="border-radius: 15px" id="cidade" maxlength="40" name="cidade" placeholder="Ex: Brasília">
			</div>
			<div class="form-group col-md-6">
				<label for="estado" >Estado</label>
				<select id="estado" name="estado" class="form-control" style="border-radius: 15px">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF" selected>Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="aparelho">Aparelho</label>
				<select class="form-control" name="aparelho" id="aparelho" style="border-radius: 15px" >
					<option value="mobile">Mobile</option>
					<option value="computadores">Computadores</option>
					<option value="outros">Outros</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="aparelho">Tipo</label>
				<select class="form-control" name="aparelho" id="tipo" style="border-radius: 15px">
					<option value="notebook">Notebook</option>
					<option value="desktop">Desktop</option>
					<option value="celular">Celular</option>
					<option value="tablet">Tablet</option>
				</select>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="aparelho">Marca</label>
				<select class="form-control" name="aparelho" id="aparelho" style="border-radius: 15px">
					<option value=""></option>
					<?php while($row = $res->fetch_assoc()): ?>
					<option value=<?= $row["id_marca"] ?>><?= $row["marca"] ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="modelo">Modelo</label>
				<div class="input-group">
					<input type="text" class="form-control" id="modleo" maxlength="40" name="modelo" style="border-radius: 15px" required placeholder="Ex:XT-1033">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="descricao">Descrição</label>
			<textarea class="form-control" style="border-radius: 15px" id="descricao" rows="3" name="descricao" required placeholder="Digite aqui a descrição do aparelho e o problema a ser solucionado"></textarea>
		</div>
	</div>
	<button type="submit" style="border-radius: 15px" class="btn blue-gradient">Cadastrar</button>
</form>
</div>