<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">




	<title>¡Escribe tu carta aquí!</title>
</head>
<body  style="background-image: url(fondocrear.webp);
height: 800px;
    background-size: cover;
    background-size: 100rem;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
	">
    
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
	        <a class="nav-link" href="nuevo.php">Escribela aquí</a>
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
				<h1>Crea tu carta</h1><hr>
				<form action="guardarBlog.php" method="POST">
					<div class="form-group">
						<h3><b><label for="nombre">Querido Santa, mi nombre es:&nbsp;</label>
						<input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre">
					</div>
					<div class="form-group">
					<h3><b><label for="comportamiento">Este año yo... </label><br></b>
    <div>
	<input type="radio" name="com" value="me porté muy bien"><b>me porté muy bien.<br>
    <input type="radio" name="com" value="me porté más o menos">me porté más o menos.<br>
    <input type="radio" name="com" value="creo que me porté mal:("required>creo que me porté mal:(.</b></div><br></h3>
						<h3><b><label for="contenido">Porque...</label>
						<textarea  cols="30" rows="5" class="form-control" name="contenido" placeholder="Cuéntanos lo positivo o negativo que hiciste este año" required></textarea>
					</div>
					<div class="form-group">
						<h3><label for="deseos">Esta navidad yo quisiera:</label><br></b></h3>
    
						<input type="text" cols="30" rows="5" class="form-control" name="deseo1" placeholder="Deseo 1" ><br>
						<input type="text" cols="30" rows="5" class="form-control" name="deseo2" placeholder="Deseo 2" ><br>
						<input type="text" cols="30" rows="5" class="form-control" name="deseo3" placeholder="Deseo 3" ><br>
						<input type="text" cols="30" rows="5" class="form-control" name="deseo4" placeholder="Deseo 4" ><br>
						<input type="text" cols="30" rows="5" class="form-control" name="deseo5" placeholder="Deseo 5" ><br><br>
					</div>
					
						<input type="submit" value="Guardar" class="btn btn-primary">
						<a href="consultarBlogs.php" class="btn btn-info">Cancelar</a>
					</div>
				</form>
			</div>
		</div>
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
</div>
</body>
</html>