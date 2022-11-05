<?php
include ("conexion.php");

session_start();

//Iniciar Sesion
if (!empty($_POST)){
    $usuario = mysqli_real_escape_string($conexion,$_POST['user']);
    $password = mysqli_real_escape_string($conexion,$_POST['pass']);
    $password_encriptada = sha1($password);
    $sql = "SELECT idusuarios FROM usuarios
                WHERE usuario = '$usuario' AND password = '$password_encriptada'";

    $resultado = $conexion->query($sql);
    $rows = $resultado -> num_rows;
    if($rows > 0){
        $row = $resultado->fetch_assoc();
        $_SESSION['id_usuarios'] = $row["idusuarios"];
        header("Location: admin.php");
    }else{
        echo "<script>
				alert('Usuario o contraseña incorrecta');
				window.location = 'iniciar_sesion.php';
				</script>";
	}
}
// unset($_SESSION['id_usuarios']);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
	<link rel="icon" href="assets/img/logo.png" type="image/x-icon"/>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <div class="contenedor">
    <div class="img">
    <img src="../Login/images/undraw_forgot_password_re_hxwm.svg" alt="">
    </div>
    <div class="contenido-login">

    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" autocomplete="off" >

    <img src="../Login/images/4172850.png" alt="">
    <br>
    <h2>INICIAR SESIÓN</h2>
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-user"></i>
    </div>
    <div class="div">

     <input type="text"  name="user"  required placeholder="USUARIO">
     
    </div>
    </div>
    
    <div class="input-div nit">
    <div class="i">
    <i class="fas fa-lock"></i>
    </div>
    <div class="div">

     <input type="password"  name="pass"  required placeholder="CONTRASEÑA">
    
    </div>
    
    </div>
    
	<button class="btn-1" name='login' type="submit"> Ingresar </button> 
    </form>

    </div>
    </div>
	
</body>

</html>