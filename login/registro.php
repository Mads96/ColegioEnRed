<?php
include("conexion.php");

$con=mysql_connect($host, $user, $pw) or die("problemas con servidor");
mysql_select_db($db, $con) or die("problemas con DB");


$correo = $_POST['correo'];
$rut = $_POST['rut'];
$pw = $_POST['pw'];


print $rut;
print $correo;
print $pw;


$sql = "INSERT INTO login VALUES ('$rut', '$correo', '$pw')";
$result = mysql_query($sql);


?>