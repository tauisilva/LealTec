<?php

	include_once("/conexao.class.php");
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$sql = "INSERT INTO cliente (nome_cliente, email_cliente, cpf_cliente, endereco_cliente, cidade_cliente, uf_cliente, fone_cliente, genero_cliente, data_nasc_cliente) VALUES ('{$nome}', '{$email}', '{$cpf}', '{$endereco}', '{$cidade}', '{$uf}', '{$fone}', '{$genero} '{$data_nasc}'";

			$res = $conn->Consultas($sql) or die($conn->error);

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