<?php

//inclusão de páginas
switch (@$_REQUEST["page"]) {
	case 'cad-cliente':
		include("cliente/cadastrar-cliente.php");
		break;
	
	case 'edi-cliente':
		include("cliente/editar-cliente.php");
		break;
		
	case 'lis-cliente':
		include("cliente/listar-cliente.php");
		break;

	case 'sav-cliente':
		include("cliente/salvar-cliente.php");
		break;
	
	case 'admin':
		include("funcionario/dashboard.html");
		break;
	
	default:
	include("dashboard.php");
}

?>