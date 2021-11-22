<?php
session_start();

// error_reporting(E_ALL); 
// ini_set('display_errors', 1);

include("config/variables.php");

if (!isset($_SESSION['usuario'])){
	include(PAGE."/login.php");
}else{

	//Incluir a la conexion de base de datos
	include_once(DATABASE_CONNECTION);

	//Utilerias
	require_once (LIB_CORE.'/HTMLPurifier/HTMLPurifier.standalone.php');
	require_once (UTIL_CORE.'/Sanitizador.class.php');
	require_once (UTIL_CORE.'/CodingUTF8.class.php');
	require_once (UTIL_CORE.'/VariablesEntorno.class.php');
	require_once (UTIL_CORE.'/Constantes.php');
	require_once (UTIL_CORE.'/EncriptadorTexto.class.php');

	//pagina solicitada
	$pagina = (!isset($_GET['p']) ? DEFAULT_PAGE : Sanitizador::getValorSanitizado($_GET['p']));	

	include(TEMPLATES."/header.php");
	include(TEMPLATES."/menu.php");
	include(PAGE."/".$pagina.".php");

	include(TEMPLATES."/footer.php");
}
?>