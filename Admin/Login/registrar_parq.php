<?php
include("conexion.php");

//Registrar
if(isset($_POST["registrar"])){
	$nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
	$usuario = mysqli_real_escape_string($conexion, $_POST['user']);
	$password = mysqli_real_escape_string($conexion, $_POST['pass']);
	$password_encriptada = sha1($password);
	$sqluser = "SELECT idusuarios FROM usuarios 
						WHERE Usuario = '$usuario'";
	$resultadouser = $conexion->query($sqluser);
	$filas = $resultadouser->num_rows;
	if ($filas > 0){
		echo "<script>
				alert('El usuario ya existe')
				window.location = 'registrar_parq.php';
				</script>";
	}else{
		$sqlusuario = "INSERT INTO usuarios(Nombre,Usuario,Password)
				VALUES ('$nombre', '$usuario', '$password_encriptada')";
		$resultadousuario = $conexion->query($sqlusuario);
		if ($resultadousuario > 0){
			echo "<script>
				alert('Registro exitoso');
				window.location = 'registrar_parq.php';
				</script>";
		}else{
			echo "<script>
				alert('Error al registrarse');
				window.location = 'registrar_parq.php';
				</script>";
		}
	}



}


//Hora


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>z
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles_reg.css">
	<link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <div class="contenedor">
    <div class="img">
    <img src="../Login/images_reg/undraw_add_information_j2wg.svg" alt="">
    </div>
    <div class="contenido-login">

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" autocomplete="off" >

    <img src="../Login/images_reg/2439758.png" alt="">
    <br>
    <h2>REGISTRA TU PARQUEADERO</h2>
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-parking"></i>
    </div>
    <div class="div">

     <input type="text"  name="nombre" placeholder="NOMBRE DEL PARQUEADERO" required >
     
    </div>
    </div>

    
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-parking"></i>
    </div>
    <div class="div">

     <input type="text" name="user" placeholder="USUARIO" required >
     
    </div>
    </div>

    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-parking"></i>
    </div>
    <div class="div">

     <input type="password" name="pass" placeholder="CONTRASEÑA" required >
     
    </div>
    </div>

    <button class="btn-1" name='registrar' type="submit"> REGISTRARSE </button> 

    </form>

    </div>
    </div>
	
</body>

</html>