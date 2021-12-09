<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">




	<title>Respuesta de Santa</title>
</head>
<body  style="background-image: url(fondocrear.webp);
height: 800px;
    background-size: cover;
    background-size: 100rem;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
	">
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
				<h1>Respuesta de Santa</h1><hr>
				
					<div class="form-group">
                    <center>
				    <i><h5  style="text-alig:center" class="card-title">¡HO HO HO! <br> Hola&nbsp;<b><?php echo $blog['nombre']; ?></b>, gracias por comunicarte conmigo
                    , te saludo desde el Polo Norte.<br>
					<?php

if( $blog['comportamiento'] == "me porté muy bien"){
    echo "
	Me gusta saber que este año te portaste bien, a
    los niños que se portan bien, siempre les va bien ¡HO HO HO!<br>Por eso quiero decirte que esta carta ha sido <b>¡APROBADAAAA!</b>,
esta navidad tus deseos se cumplirán y espero que sigas así, me agrada saber que has cumplido con tus deberes, nos vemos en navidad. <br>
<br>Atte. Santa Clous";
}elseif($blog['comportamiento'] == "me porté más o menos"){
    echo "Me alegra saber que no te has portardo tan mal, pero deberías hacer las cosas mejor
    para el próximo año y es por eso que tu carta será <b>aprobada</b>, pero debes esforzarte más el 
    siguiente año, por poco no lo consigues... ¡HO HO HO! <br><br> Atte. Santa Clous";
}else{
    echo"Santa está muy triste de saber que no te has portado bien este año, y aunque 
    entiendo que no siempre es<br> fácil, en esta ocasión tu carta será
    <b>rechazada:(</b> pero esfuerzate más el próximo año y lo conseguirás, mucha suerte... <br>¡HO HO HO!<br><br>
    Atte. Santa Clous<br>";
}?>
                </h5>
</h5></b>
                      </center>

					</div>
                    
					
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