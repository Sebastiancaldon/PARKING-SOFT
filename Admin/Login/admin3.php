

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
            
            <a href="admin4.php">
                <div class="option">
                <i class="fa-solid fa-door-open"></i>
                    <h4>Salida vehiculo</h4>
                </div>
            </a>

            <a href="admin3.php" class="selected">
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
        <h1 class="fw-bold"> INGRESOS DEL PARQUEADERO </h1><br>
			<br>
			<br>

			<div class="row">
				<div class="col-sm-4 offset-sm-2">
					<div class="stat-card">
						<div class="stat-card__content">
							<p class="text-uppercase mb-1 text-muted">HOY</p>
							<h2><i class="fa fa-dollar"></i> 1,254</h2>
							<div>
                            <span class="text-danger font-weight-bold mr-1"><i class="fa fa-car"></i> 0 VEHICULOS </span> 
							</div>
						</div>
						<div class="stat-card__icon stat-card__icon--success">
							<div class="stat-card__icon-circle">
								<i class="fas fa-solid fa-money-bill"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="stat-card">
						<div class="stat-card__content">
							<p class="text-uppercase mb-1 text-muted">ESTE MES</p>
							<h2><i class="fa fa-dollar"></i> 1,254</h2>
							<div>
								<span class="text-danger font-weight-bold mr-1"><i class="fa fa-car"></i> 0 VEHICULOS </span> 
								
							</div>
						</div>
						<div class="stat-card__icon stat-card__icon--primary">
							<div class="stat-card__icon-circle">
                            <i class="fa-sharp fa-solid fa-coins"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script src="script.js"></script>
</body>
</html>