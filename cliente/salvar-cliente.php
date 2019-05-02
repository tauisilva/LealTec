<?php
	$nome = @$_REQUEST["nome_cliente"];
	$email  = @$_REQUEST["email_cliente"];
	$cpf  = @$_REQUEST["cpf_cliente"];
	$endereco  = @$_REQUEST["endereco_cliente"];
	$cidade  = @$_REQUEST["cidade_cliente"];
	$uf  = @$_REQUEST["uf_cliente"];
	$fone  = @$_REQUEST["fone_cliente"];
	$genero  = @$_REQUEST["genero_cliente"];
	$data_nasc  = @$_REQUEST["data_nasc_cliente"];

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$sql = "INSERT INTO cliente (nome_cliente, email_cliente, cpf_cliente, endereco_cliente, cidade_cliente, uf_cliente, fone_cliente, genero_cliente, data_nasc_cliente) VALUES ('{$nome}', '{$email}', '{$cpf}', '{$endereco}', '{$cidade}', '{$uf}', '{$fone}', '{$genero} '{$data_nasc}'";

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<br><div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<br><div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}

			break;

		case 'editar':
			# code...
			break;

		case 'excluir':
			# code...
			break;
		
	}
?>