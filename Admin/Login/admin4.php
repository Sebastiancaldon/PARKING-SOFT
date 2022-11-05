<?php 
    
    include ("conexion.php");

            session_start();
        if( is_null($_SESSION['id_usuarios'])) {
            header("Location: iniciar_sesion.php");
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
    <link rel="stylesheet" href="styles_admin3.css">
    <link rel="stylesheet" href="script.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

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

            <a href="admin2.php">
                <div class="option">
                    <i class="fa-solid fa-car" title="Vehiculos guardados"></i>
                    <h4>Vehiculos guardados</h4>
                </div>
            </a>
            
            <a href="admin4.php" class="selected">
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

    <section class="main-content">
		<div class="container">
        <h1 class="fw-bold"> SALIDA VEHICULO </h1><br>
			<br>
			<br>

            <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>PLACA</th>
                                        <th>HORA DE ENTRADA</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>

                                <?php

                                    

                                        $sql="SELECT *  FROM vehiculos INNER JOIN precio";
                                        $result=mysqli_query($conexion,$sql);

                                        while($pp=mysqli_fetch_array($result)){

                                            $id = $pp['Id'];
                                            $placa = $pp['placa'];
                                            $hora_entrada = $pp['hora_entrada'];
                                            $precio_hora = $pp['precio_hora'];
                                            
                                        
                                        
                                            if (!empty($_POST)){
                                                $placa = $_POST['id_modal_valor_placa'];

                                                $sql = "UPDATE `vehiculos` SET `´hora_salida` = '$hora_salida' , ´hora_salida` = 'modal_valor_fecha_salida', ´pago` = 'modal_valor_pago'   WHERE 1";
                                                //$sql = "UPDATE `precio` SET (`precio_hora`) VALUES ('".$precio_hora."' );";

                                                $resultado = $conexion->query($sql);

                                            }

                                        ?>

                                            <tr>
                                                <th><?php  echo $pp['Id']?></th>
                                                <th><?php  echo $pp['placa']?></th>
                                                <th><?php  echo $pp['hora_entrada']?></th>

                                                <th> <button type="button" class="btn btn-primary" onclick="actualizarModal('<?= $pp['Id'] ?>','<?= $pp['placa'] ?>','<?= $pp['hora_entrada'] ?>')" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Salida</button></th>
                                                                                                                             
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel">Salida vehiculo </h4>⠀
                                            <h4 id="modal_valor_placa"><?php echo $placa; ?></h4>
                                            
                                            
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">

                                            <form method="post" accept-charset="utf-8">
                                                <div id="modal_id_vehiculo" style="display:none" ></div>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="fw-bold">Entrada:</label> 
                                                    <div id="modal_valor_fecha" ><?php echo $hora_entrada; ?></div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="fw-bold">Salida:</label> 
                                                    <BR>

                                                    <?php
                                                        date_default_timezone_set('America/Bogota');
                                                        $hora_entrada=date("Y-m-d H:i:s");
                                                        echo $hora_entrada;
                                                    ?>
                                                   
                                                </div>

                                                <div class="mb-3">
                                                    <label for="message-text" class="fw-bold">Transcurrido:</label>
                                                    <br>
                                                    <label id="modal_valor_fecha_salida" id="horas"></label> <label for="message-text" class="col-form-label"> Horas</label>
                                                
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="fw-bold">Costo sugerido:</label><label for="message-text" class="col-form-label">⠀COP <?php echo $precio_hora; ?> / hora </label>
                                                    
                                                </div>

                                                <div class="mb-3">
                                                    <label for="message-text" class="fw-bold">Total a pagar:</label>
                                                    <label for="message-text" id="modal_valor_pago" > <?php echo $hora_entrada; ?></label> 
                                                    
                                                </div>

                                                <div class="modal-footer">
                                                <button class="btn btn-outline-primary btnSalida" class="btn-close" data-bs-dismiss="modal" aria-label="Close" type="submit"> Salida </button> 
                        
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


        </div>
	</section>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>


        function calcularDiasAusencia(fechaIni, fechaFin) {
            var horaEnMils = 1000 * 60 * 60,
                desde = new Date(fechaIni),
                hasta = new Date(fechaFin),
                diff = hasta.getTime() - desde.getTime();// +1 incluir el dia de ini
            return diff / horaEnMils;
        }


       

        var actualizarModal = function (idVehiculo, placa, fecha){
            document.getElementById("modal_valor_fecha").innerHTML = fecha;
            var y = document.getElementById("modal_id_vehiculo").innerHTML = idVehiculo;
            document.getElementById("modal_valor_placa").innerHTML = placa;
            let fechaActual = (new Date()).toISOString();
            let modal_valor_fecha_salida = calcularDiasAusencia(fecha, fechaActual);
            
            modal_valor_fecha_salida_int = Math.ceil(modal_valor_fecha_salida);
            // redondear
            let modal_valor_pago = multiplicar(modal_valor_fecha_salida_int);
            document.getElementById("modal_valor_fecha_salida").innerHTML = modal_valor_fecha_salida_int;
            document.getElementById("modal_valor_pago").innerHTML = modal_valor_pago;
    
        }

        function multiplicar(modal_valor_fecha_salida_int){

            m1 = <?php echo $precio_hora; ?>;
            m2 = modal_valor_fecha_salida_int;
            r = m1*m2

            return r;

            }

            btnSalir = document.querySelector('.btnSalida');
            btnSalir.addEventListener('click', (event) =>{
                event.preventDefault();

            let fecha = document.getElementById("modal_valor_fecha").innerHTML;
            let idVehiculo = document.getElementById("modal_id_vehiculo").innerHTML;
            let placa = document.getElementById("modal_valor_placa").innerHTML;
            let tiempo = document.getElementById("modal_valor_fecha_salida").innerHTML;
            let pago = document.getElementById("modal_valor_pago").innerHTML;

            
           // var miData  = 'idVehiculo='+idVehiculo+'&tiempo='+tiempo;
           // var miData  = 'idVehiculo='+idVehiculo+'&placa='+placa+'&tiempo='+tiempo;
                $.ajax({
                    type: "POST",
                    data: { idVehiculo, tiempo, pago },
                    url: 'recibeUpdate.php',
                    success: function (resp) {
                    console.log(resp);

                    //cerrar la venta
                        

                    }
                }); 

            });



    

    </script>

</body>
</html>