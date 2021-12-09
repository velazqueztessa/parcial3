<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/estilossli.css"> 

	<title>Respuesta de Santa</title>
</head>
<body >
	<?php

		$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "blogs";
		$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

		if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

		$id = $_GET["id"];

		$sql = "SELECT * FROM posts WHERE id=$id";
		$datos = $conexion->query($sql);

		$blog = $datos->fetch_assoc();

		$sql2 = "SELECT * FROM comentarios WHERE idpost = $id";
		$datos2 = $conexion->query($sql2);

		
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Escribe tu carta a Santa</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="nuevoBlog.php">Escribe tu carta</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
	          Más...
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="consultarBlogs.php">Cartas navideñas enviadas</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	    </ul>

	  </div>
	</nav><br>

	<div class="container" style="   background-image: url(detalle.png);
    height: 800px;
    background-size: cover;
    background-size: 100rem;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">
		<div class="row">
			<div class="col">
				<div class="card">
				  <div class="card-body">
				  	<div class="row mb-3">

                     <center>
					  <h1><u>Tu carta  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
					  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
					  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; <br><br> </u></h1>
					    
				    <i ><h5  style="text-alig:center" class="card-title">Querido Santa, mi nombre es&nbsp;<b><?php echo $blog["nombre"]; ?>.</b></h5>
					<h5 class="card-text">Este año yo...<b><?php echo $blog["comportamiento"]; ?></h5></b>
				    <h5 class="card-text">Porque... <b><?php echo $blog["contenido"]; ?></h5></b>
					<h5 class="card-text">Y esta navidad quisiera: <br><b><?php echo $blog["deseo1"]; ?></b></h5>
					<h5 class="card-text"><b><?php echo $blog["deseo2"]; ?></b></h5>
				    <h5 class="card-text"><b><?php echo $blog["deseo3"]; ?></b></h5>
				    <h5 class="card-text"><b><?php echo $blog["deseo4"]; ?></b></h5>
				    <h5 class="card-text"><b><?php echo $blog["deseo5"]; ?></b></h5></b></i><br><br><br><br>                                  </center>
				    
				  </div>
				</div>
			</div>
		</div>
	</div>

	<hr>
	<footer class="text-center">
		Envía tu carta a Santa. &copy; 2021<br>
		Velazquez Rodriguez Tessa Airam<br>
		LLanez Marrujo Saul Armando <br>
		5AVP
	</footer><br>

	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>