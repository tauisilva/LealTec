<?php

switch (@$_REQUEST["page"]) {	
	case 'cad-advogado':
		include("advogado/cadastrar-advogado.php");
		break;

	case 'edi-advogado':
		include("advogado/editar-advogado.php");
		break;

	case 'lis-advogado':
		include("advogado/listar-advogado.php");
		break;

	case 'sal-advogado':
		include("advogado/salvar-advogado.php");
		break;
			
	case 'cad-cliente':
		include("cliente/cadastrar-cliente.php");
		break;
	
	default:
	include("dashboard.php");
}

?>