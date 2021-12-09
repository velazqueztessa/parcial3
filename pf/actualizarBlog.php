<?php 
	
	$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "blogs";
	$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);
	$conexion->set_charset("utf8");

	if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

	$id = $_POST["id"];
	$nombre = $_POST["nombre"];
	$contenido = $_POST['contenido'];
	$fecha = date("Y-m-d");
    $comportamiento=$_POST["com"];
	$deseo1 = $_POST["deseo1"];
	$deseo2 = $_POST["deseo2"];
	$deseo3 = $_POST["deseo3"];
	$deseo4 = $_POST["deseo4"];
	$deseo5 = $_POST["deseo5"];

	$sql = "UPDATE posts SET nombre='$nombre', contenido='$contenido', fecha='$fecha', id='$id', deseo1='$deseo1',deseo2='$deseo2',deseo3='$deseo3',
	deseo4='$deseo4',deseo5='$deseo5',comportamiento='$comportamiento'  WHERE id='$id'";
	var_dump($sql);

	$result = $conexion->query($sql);

	if($conexion->query($sql) === TRUE){
		header('Location: consultarBlogs.php');
	} else {
		echo "Ocurrio un error: " . $conexion->error;
	}

?>