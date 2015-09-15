<?php
session_start();
include("conexion.php");
if(isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pw']) && !empty($_POST['pw'])	)
{

$con=mysql_connect($host, $user, $pw) or die("problemas con servidor");
mysql_select_db($db, $con) or die("problemas con DB");

	$sel= mysql_query("SELECT login_correo, login_pass FROM login WHERE login_correo= '$_POST[user]'", $con);

$sesion= mysql_fetch_array($sel);

if($_POST['pw']==$sesion['login_pass']){
	$_SESSION['username'] = $_POST['user'];
	header('Location: ../inicio.php');

}else{
echo "ERROR";
header('Location: ../index.html');

}

}else{echo "deves llenar ambos campos";
	echo "<a href=form.php> salir </a>";
}

?>
