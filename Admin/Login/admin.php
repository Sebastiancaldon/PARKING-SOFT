<?php
include ("conexion.php");
session_start();
if( is_null($_SESSION['id_usuarios'])) {
    header("Location: iniciar_sesion.php");
}

if (!empty($_POST)){
    $placa = $_POST['placa'];
    $fecha = $_POST['fecha'];

    

    $sql = "INSERT INTO `vehiculos` (`placa`, `hora_entrada`) VALUES ('".$placa."',  '".$fecha."' );";

    $resultado = $conexion->query($sql);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Principal</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles_padmin.css">
    <link rel="stylesheet" href="script.js">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>


    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-solid fa-square-parking"></i>
            <h4>PARKING-SOFT</h4>
        </div>

        <div class="options__menu">	

            <a href="#registrar" class="selected">
                <div class="option">
                    <i class="fas fa-plus" title="Agregar vehiculo"></i>
                    <h4>Agregar vehiculo</h4>
                </div>
            </a>

            <a href="admin2.php">
                <div class="option">
                    <i class="fa-solid fa-car" title="Vehiculos guardados"></i>
                    <h4>Vehiculos guardados</h4>
                </div>
            </a>
            
            <a href="admin4.php">
                <div class="option">
                <i class="fa-solid fa-door-open"></i>
                    <h4>Salida vehiculo</h4>
                </div>
            </a>

            <a href="admin3.php">
                <div class="option">
                    <i class="fa-solid fa-sack-dollar"></i>
                    <h4>Ingresos</h4>
                </div>
            </a>

            
            <br>
            <br>
            <br>
            <br>
            
            <a href="config.php">
                <div class="option">
                <i class="fa-solid fa-gear"></i>
                <h4> CONFIGURACION </h4>
                </div>
            </a>


            

        </div>

    </div>

    <main>
        <div class="principal" id="registrar">
            <h1 class="fw-bold"> AGREGAR VEHICULO </h1><br>

            <BR>
          
            <form  method="post" accept-charset="utf-8">

                <h2 class="fw-lighter"> PLACA </h2>
                <BR>
                <input type="text" class="form-control mb-3" name="placa" required placeholder="Placa del vehiculo">
                <BR>
                <h2 class="fw-lighter"> HORA </h2>
                <BR>

                <?php

                    date_default_timezone_set('America/Bogota');
                    $hora_entrada=date("Y-m-d H:i:s")

                ?>

                <input type="datetime" class="form-control mb-3" name="fecha" value="<?=$hora_entrada?>">

                <button class="btn btn-outline-primary" type="submit"> Agregar vehiculo </button> 

            </form>
 
            <br>
        

            <br>
            <br>
            <br>
        

    </main>

    <script src="script.js"></script>
</body>
</html>