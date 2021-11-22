<?php

//Iniciar la variable de session de php
session_start();

//Descomentar en caso de necesitar debugear el codigo
// error_reporting(E_ALL); 
// ini_set('display_errors', 1);

//Incluir las variables de configuración
include("../config/variables.php");

//Incluir a la conexion de base de datos
include_once(DATABASE_CONNECTION);
//Utilerias
require_once (UTIL_CORE.'/VariablesEntorno.class.php');
include_once (UTIL_CORE.'/Constantes.php');
require_once (UTIL_CORE.'/CodingUTF8.class.php');
require_once (UTIL_CORE.'/Sanitizador.class.php');
require_once (UTIL_CORE.'/EncriptadorTexto.class.php');

//Clase de sesiones
require_once (LIB_CORE.'/Sesiones/Sesion.class.php');


//Indicar el tipo de de dato de salida: JSON
header("Content-type:application/json");
//Formato estandar para el horario de Mexico
date_default_timezone_set('America/Mexico_City');


$mensajesParam = VariablesEntorno::getVarEnvByArchivo('servicios');
$defaultServOK = VariablesEntorno::getFindMensaje($mensajesParam, "SE02");

$request = \Sanitizador::getArregloSanitizado($_POST);
$servicio = $request['service'];
$result_json = array("error" => "", "codErr" => "");

$usuario = $_SESSION['usuario'];
$ip = \Constantes::getIpUsuario();

 $fn = new procesos();


// if (!isset($usuario)){			
// 	$result_json["error"] = "S01";
// 	$result_json["codErr"] = VariablesEntorno::getFindMensaje($mensajesParam, "SE01");
// }else{			
	
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
		switch ($servicio) {
			case 'doLogin':
				$usuario = $request['usuario'];
				$password = $request['password'];

				$obj = new \Sesiones\Sesion();
				$respuesta = $obj->doLogin($usuario, $password);

				$result_json["error"] = $respuesta['error'];
				$result_json["codErr"] = $respuesta['codErr'];
				break;
			
			default:
				$result_json["error"] = "P01";
				$result_json["codErr"] = VariablesEntorno::getFindMensaje($mensajesParam, "SE03");
				break;
		}
		
	}else if($_SERVER['REQUEST_METHOD'] == 'GET'){		
		$result_json["error"] = "G01";
		$result_json["codErr"] = VariablesEntorno::getFindMensaje($mensajesParam, "SE04");
	}		
// }

unset($fn);
unset($mensajesParam);
unset($request);
echo json_encode(CodingUTF8::getArregloCod($result_json));

?>