<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Editar carta</title>
</head>
<body style="background-color:#e14848">
	<?php 

		$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "blogs";
		$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);


		if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

		$id = $_GET["id"];
		$conexion->set_charset("utf8");

		$sql = "SELECT * FROM posts WHERE id = $id";

		$result = $conexion->query($sql);
		$posts = mysqli_fetch_assoc($result);


	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="nuevoBlog.php">Envía tu carta a Santa</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="nuevoBlog.php">Escribela aquí</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
	          Más...
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="consultarBlogs.php">Cartas enviadas</a>
	          <div class="dropdown-divider"></div>
	        </div>
	      </li>
	    </ul>

	  </div>
	</nav><br>

	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Modifica tu carta</h1><hr>
				<form action="actualizarBlog.php" method="POST">					
					<input type="hidden" name="id" value="<?php  echo $posts['id']; ?>">
					<div class="form-group">
						<label for="nombre">Querido Santa, mi nombre es:</label>
<input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre" value="<?php echo $posts['nombre']; ?>">
					</div>
					<div class="form-group">
					<label for="comportamiento">Este año yo...</label>
     <input type="radio" cols="30" rows="5" class="form-control"  name="com"<?php if($posts['comportamiento']== 'me porté muy bien'){echo 'checked';} ?> 
	 value="me porté muy bien"><b>me porté muy bien.
<br>
    <input type="radio" cols="30" rows="5" class="form-control" name="com"  <?php if($posts['comportamiento']== 'me porté más o menos'){echo 'checked';} ?>
	value="me porté más o menos"><br>me porté más o menos.	
    <input type="radio" cols="30" rows="5" class="form-control"  name="com" <?php if($posts['comportamiento']== 'creo que me porté mal:('){echo 'checked';} ?>
	value="creo que me porté mal:("required >
	creo que me porté mal:(.
</b><br>

	
</div>
 <label for="contenido">Porque...</label>
<textarea  cols="30" rows="5" class="form-control" name="contenido" placeholder="Cuéntanos lo positivo o negativo que hiciste este año" required><?php echo $posts['contenido']; ?></textarea>
<div class="form-group">
<h3><label for="deseos">Esta navidad yo quisiera:</label><br></b></h3>
 <input type="text"  class="form-control" name="deseo1" placeholder="Deseo 1" value="<?php echo $posts['deseo1']; ?>"><br>
<input type="text" class="form-control" name="deseo2" placeholder="Deseo 2" value="<?php echo $posts['deseo2']; ?>" ><br>
<input type="text" class="form-control" name="deseo3" placeholder="Deseo 3"value="<?php echo $posts['deseo3']; ?>"><br>
<input type="text"  class="form-control" name="deseo4" placeholder="Deseo 4" value="<?php echo $posts['deseo4']; ?>"><br>
<input type="text"  class="form-control" name="deseo5" placeholder="Deseo 5" value="<?php echo $posts['deseo5']; ?>"><br><br>
</div>
<div>
<br<br><br>
						<input type="submit" value="Guardar" class="btn btn-primary">
						<a href="consultarBlogs.php" class="btn btn-info">Cancelar</a>
</div>
				</div>
						
					
				</form>
			</div>
		</div>
	</div>

	<hr>
	<footer class="text-center">
		Envía tu carta a Santa &copy; 2021<br>
		Velazquez Rodriguez Tessa Airam<br>
		LLanez Marrujo Saul Armando <br>
		5AVP

	</footer><br>

	<script src=js/jquery.js></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>