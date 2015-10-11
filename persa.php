<?php
$nombre=$_POST['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/mads.css">
	<link rel="stylesheet" href="css/alturas.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/mads.js"></script>
	<title>colegios en red</title>
</head>
<body>
			<div class="cabecera col-10 bg-purpura">
			<div class="cabecera col-85 text-blanco"><h3>Colegios en red</h3><p class="col-10">Bienvenido a <?php echo $nombre; ?> .
			</p>
			<button class="btn-lg  btn-purpura " onclick="hola('.publicar','no-se-ve')">PUBLICAR</button>
			
		</div>
			<div class="articulo-logo col-15"><img src="img/logo.png" alt="" ></div>
			</div>
			<nav class="nav col-10 bg-purpura text-blanco text-right">
				<ul>
					<li>uno |</li>
					<li>dos |</li>
					<li>tres |</li>
					<li>cuatro |</li>
					<li>cinco |</li>
				</ul>
			</nav>
			<div class="conenedor">
				
				<div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div>

			</div>

	<!-- /////////////////////////////////// formulario de publicaciones ////////////////////// -->

			<div class=" publicar pop bg-purpura text-center  text-blanco no-se-ve">
					<form action="publicaciones.php" method="post">
						
						<p>Titulo</p>
						<input type="text" name="titulo">
							<br/>
							<br/>
						<p>descripcion</p>
						<input type="descripcion" name="descripcion">
							<br/>
							<br/>
						<p>precio</p>
							<input type="text" name="precio" >
							<br/>
							<br/>
						<p>usuario</p>
							<input type="text" name="usuario" >
							<br/>
							<br/>
							<input type="submit" value="publicar">
						<p ><h3 class="cerrar btn" onclick="hola('.registro','no-se-ve')">cerrar</h3></p>
					</form>
			</div>
			
		<!-- /////////////////////////////////// FIN formulario de publicaciones////////////////////// -->
</body>
</html>