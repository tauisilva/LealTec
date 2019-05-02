<?php
	$nome = @$_REQUEST["nome_advogado"];
	$oab  = @$_REQUEST["oab_advogado"];
	$esp  = @$_REQUEST["especialidade_advogado"];

	switch ($_REQUEST["acao"]) {
		case 'cadastrar':

			$sql = "INSERT INTO advogado (nome_advogado, oab_advogado, especialidade_advogado) VALUES ('{$nome}', '{$oab}', '{$esp}')";

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