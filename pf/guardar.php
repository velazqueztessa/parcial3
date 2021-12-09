<?php 

	$nombre = $_POST["nombre"];
	$contenido = $_POST["contenido"];
	$idusuario = 1;
	$fecha = date("Y-m-d");
	$deseo1 = $_POST["deseo1"];
	$deseo2 = $_POST["deseo2"];
	$deseo3 = $_POST["deseo3"];
	$deseo4 = $_POST["deseo4"];
	$deseo5 = $_POST["deseo5"];
    $com= $_POST["com"];

	$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "blogs";
	$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

	if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

	$sql = "INSERT INTO posts (nombre, contenido, fecha, idusuario,deseo1,deseo2,deseo3,deseo4,deseo5,comportamiento) 
	VALUES ('$nombre', '$contenido', '$fecha', '$idusuario', '$deseo1','$deseo2','$deseo3','$deseo4','$deseo5','$com' )";

var_dump($sql);

	if($conexion->query($sql) === TRUE){
		header('Location: consultarBlogs.php');
	} else {
		echo "Ocurrio un error: " . $conexion->error;
	}

?>
