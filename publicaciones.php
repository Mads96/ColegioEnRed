<?php
include("login/conexion.php");





$con=mysql_connect($host, $user, $pw) or die("problemas con servidor");
mysql_select_db($db, $con) or die("problemas con DB");

$id = "";
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$usuario = "34";

print $titulo;
print $descripcion;
print $precio;
print $usuario;


$sql = "INSERT INTO publicaciones VALUES ('$id' ,'$titulo', '$descripcion', '$precio', '$usuario')";
$result = mysql_query($sql);



?>

<!--session_start();
if(isset($_SESSION['username'])){
echo "Si me puedes ver <a href='logout.php'>cerrar</a> ".$_SESSION['username'];
}else{echo "No me puedes ver";}-->