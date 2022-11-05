<?php

if (isset($_POST['add'])) {

    $conexion = mysqli_connect('localhost','root','','phplogin') or die (mysqli_error());
    
    $placa=$_POST['placa'];
    
    date_default_timezone_set('America/Mexico_City');
    $hora_entrada=date("Y-m-d H:i:s");
    
    $sql="INSERT INTO vehiculos(placa,hora_entrada) VALUES ('$placa', '$hora_entrada')" or die(mysqli_error());
    
    $ejecutar=mysqli_query($conexion,$sql);

}





?>