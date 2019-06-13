<?php

//inclusão de páginas
switch (@$_REQUEST["page"]) {
	case 'admin':
		include("funcionario/dashboard.html");
		break;
	
	default:
		include("dashboard.php");
}

?>