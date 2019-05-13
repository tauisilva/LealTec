<?php

switch (@$_REQUEST["page"]) {	
	case 'cad-servicos':
		include("");
		break;

	case 'edi-servicos':
		include("servicos/editar-servicos.php");
		break;

	case 'lis-servicos':
		include("servicos/listar-servicos.php");
		break;

	case 'sal-servicos':
		include("servicos/salvar-servicos.php");
		break;
			
	case 'cad-cliente':
		include("cliente/cadastrar-cliente.php");
		break;
	
	default:
	include("dashboard.php");
}

?>