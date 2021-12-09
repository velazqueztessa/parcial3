<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Cartas enviadas</title>
</head>
<body style=" background-image: url(fondocon.png);
    height: 400px;
    background-size: cover;
    background-size: 100rem;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;">
	<?php
		$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "blogs";
		$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

		if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

		$sql = "SELECT * FROM posts";
		$datos = $conexion->query($sql);
	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="index.php">Envía tu carta a Santa</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="nuevo.php">Escribe tu carta</a>
		
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
	          Más...
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="consultar.php">Cartas enviadas</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	    </ul>

	  </div>
	</nav><br>

	<div class="container">
		<div class="row">
			<div class="col">

				<?php
					if ($datos->num_rows > 0) {
				?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th font-color=withe;>Número de <br>carta</th>
							<th font-color=withe;>Remitente</th>
							<th font-color=withe;>Fecha</th>
							<th font-color=withe;>Opciones</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($blog = $datos->fetch_assoc()){
								echo "<tr>";
									echo "<td>".$blog["id"]."</td>";
									echo "<td>".$blog["nombre"]."</td>";
									echo "<td>".$blog["fecha"]."</td>";
									echo "<td><a class='btn btn-success' href='editar.php?id=".$blog["id"]."'>
									Editar</a> <a class='btn btn-danger' href='eliminar.php?id=".$blog["id"]."'>
									Eliminar</a> <a class='btn btn-danger' href='detalle.php?id=".$blog["id"]."'>
									Abrir</a> <a class='btn btn-secondary' href='respuesta.php?id=".$blog["id"]."'>Respuesta</a></td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
				<?php } else { echo "<h1>No hay cartas registradas</h1>"; $conexion->close(); } ?>
			</div>
		</div>
	</div>

	<hr>
	<footer class="text-center">
		<b>
		Envía tu carta a santa &copy; 2021<br>
		Velazquez Rodriguez Tessa Airam<br>
		LLanez Marrujo Saul Armando <br>
		5AVP
	</footer><br>

	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>