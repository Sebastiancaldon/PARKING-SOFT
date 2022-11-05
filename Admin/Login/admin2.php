<?php 
    
    $conexion=mysqli_connect('localhost','root','','phplogin')

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

            <a href="admin.php">
                <div class="option">
                    <i class="fas fa-plus" title="Agregar vehiculo"></i>
                    <h4>Agregar vehiculo</h4>
                </div>
            </a>

            <a href="#guardados" class="selected">
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
        <div class="principal" id="guardados">
            <h1 class="fw-bold"> HISTORIAL DE VEHICULOS INGRESADOS </h1><br>

            <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>PLACA</th>
                                        <th>HORA DE ENTRADA</th>
                                        <th>HORA DE SALIDA</th>
                                        <th>PAGO</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php

                                        $sql="SELECT *  FROM vehiculos "; // WHERE estado='activo'
                                        $result=mysqli_query($conexion,$sql);

                                        while($pp=mysqli_fetch_array($result)){
                                        
                                        ?>
                                            <tr>
                                                <th><?php  echo $pp['Id']?></th>
                                                <th><?php  echo $pp['placa']?></th>
                                                <th><?php  echo $pp['hora_entrada']?></th>
                                                <th><?php  echo $pp['hora_salida']?></th>
                                                <th><?php  echo $pp['pago']?></th>
                                                                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
            <BR>
          
            

        

    </main>

    <script src="script.js"></script>
</body>
</html>