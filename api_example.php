<?php
define('USER', 'MARIANO');
define('PASSWORD', 'NILODIGO2010');
define('DOMAIN', 'NOHAYDOMINIO.com');

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');

require 'vendor/slim/slim/Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

include('class.php');
header('content-type: application/json');

function echoResponse($status_code, $response) {
     echo json_encode($response);
}
$response = array();
//$db = new DbHandler();
$personaje = new Personaje('Mariano');

echo $personaje->saludar();
/* Array de autos para ejemplo response
* Puesdes usar el resultado de un query a la base de datos mediante un metodo en DBHandler
**/
$autos = array(
array('make'=>'Toyota', 'model'=>'Corolla', 'year'=>'2006', 'MSRP'=>'18,000'),
array('make'=>'Nissan', 'model'=>'Sentra', 'year'=>'2010', 'MSRP'=>'22,000')
);

$response["error"] = false;
$response["message"] = "Autos cargados: " . count($autos); //podemos usar count() para conocer el total de valores de un array
$response["autos"] = $autos;

echoResponse(200, $response);
// http_response_code('403');
echo DOMAIN;
echo 'Forbidden, sorry'

?>