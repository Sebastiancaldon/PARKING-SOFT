<?php 

include ("conexion.php");
    
session_start();
if( is_null($_SESSION['id_usuarios'])) {
    header("Location: iniciar_sesion.php");
}
if (!empty($_POST)){
    $id = $_POST['idVehiculo'];
    $placa = $_POST['placa'];

    echo "id vehiculo: ".$id;
    echo "placa: ".$placa;

    $sql = "UPDATE set  .. from  ";

    $resultado = $conexion->query($sql);
}

echo "hola";