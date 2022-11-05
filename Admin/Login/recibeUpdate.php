<?php
include ("conexion.php");
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL, 'es_ES');

print_r($_REQUEST);
$idProd       = $_REQUEST['idVehiculo'];
$hora_salida  =  date('Y-m-d H:i:s');
$tiempo       = $_REQUEST['tiempo'];
$pago = $_REQUEST['pago'];
$estado = $_REQUEST['estado'];


//$placa  = $_REQUEST['placa'];

//$fechaRegistro  = date('d-m-Y H:i:s A', time());

$update = ("UPDATE vehiculos SET tiempo='$tiempo', hora_salida='$hora_salida', pago='$pago', estado='2' WHERE Id='$idProd' ");
$resultado = $conexion->query($update);


print_r($resultado);

?>