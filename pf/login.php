<?php
$usuario = $_POST["usuario"];
$password = $_POST["password"];
if ($usuario == "admin"){
    if($password == "admin"){
    Header("location:cartasAdmin.php");
}else{
    echo "incorrecto";}
}else{
    Header("location:index.php");

}

?>