<?php
include("login/conexion.php");
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
			<div class="cabecera col-85 text-blanco"><h2>Colegios en red</h2><p class="col-10">Todo lo que pasa en tu colegio podria estar aquí.
			</p>
			<button class="btn-lg  btn-purpura " onclick="hola('.ingreso','no-se-ve')">INGRESAR</button>
			<button class="btn-lg  btn-purpura " onclick="hola('.registro','no-se-ve')">REGISTRAR</button>
			</div>

			<div class="articulo-logo col-15 no-movil"><img src="img/logo.png" alt="" ></div>
		</div> <!-- FIN CABECERA -->
			
			<nav class="nav col-10 bg-purpura text-blanco text-right no-movil">
				<ul>
					<li>uno |</li>
					<li>dos |</li>
					<li>tres |</li>
					<li>cuatro |</li>
					<li>cinco |</li>
				</ul>
			</nav>
			
			<div class="contenedor">
				<div class="articulo col-10 bg-blanco text-negro text-justificado" >
					<h3>¿Que es?</h3>
					<p>
					El proyecto está pensado en brindar una herramienta de apoyo para el mundo escolar, incluyendo en este grupo a profesores alumnos y apoderados. para esto se desarrollará un servicio web que constará de varias etapas de desarrollo, enfocadas en los distintos actores.
					</p>
				</div>
				
				<div class="articulo redondeado col-3 bg-verde altura-2 btn"style="margin-right:5%;">
					<div class="articulo  col-10 text-blanco  text-center" onclick="hola('.primera','no-se-ve')"  >
						<h3>Primera etapa:</h3><p><h3>canalizar el costo monetario de las responsabilidades escolares...</h3></p>
					</div>

					<div class="primera articulo col-10 text-blanco text-justificado no-se-ve">
						<p>
						La primera etapa de colegios en red estará focalizada en canalizar el costo monetario de las responsabilidades escolares y a su vez permitir el desarrollo de una comunidad escolar comprometida con la realidad socio-cultural y económica de todos los involucrados.
						En esta etapa se desarrollará un portal filtrado por colegios en el cual permitiremos la publicación de artículos relacionados con el mundo escolar así, se permitirá la movilidad de artículos usados y nuevos como textos escolares, libros de lectura domiciliaria, uniformes, etc.. 
						Para esto los colegios interesados deberán inscribirse sin costo en nuestro sitio a través de un representante del colegio directamente o en su defecto del centro de padres.
						</p>
					</div>
				
				</div>
				
				<div class="articulo redondeado col-3 bg-azul altura-2 btn" style="margin-right:5%;" >
					<div class=" articulo col-10 text-blanco  text-center" onclick="hola('.segunda','no-se-ve')" >
						<h3>Segunda etapa:</h3><p><h3>Usar el interes tecnológico como veneficio para la educación...</h3></p>
					</div>

					<div class=" segunda no-se-ve articulo col-10 text-blanco text-justificado">
						<p>
						La primera etapa de colegios en red estará focalizada en canalizar el costo monetario de las responsabilidades escolares y a su vez permitir el desarrollo de una comunidad escolar comprometida con la realidad socio-cultural y económica de todos los involucrados.
						En esta etapa se desarrollará un portal filtrado por colegios en el cual permitiremos la publicación de artículos relacionados con el mundo escolar así, se permitirá la movilidad de artículos usados y nuevos como textos escolares, libros de lectura domiciliaria, uniformes, etc.. 
						Para esto los colegios interesados deberán inscribirse sin costo en nuestro sitio a través de un representante del colegio directamente o en su defecto del centro de padres.
						</p>
					</div>
			
				</div>

				<div class="articulo redondeado col-3 bg-celeste altura-2 btn">
					<div class="articulo col-10 text-blanco  text-center" onclick="hola('.tercera','no-se-ve')" >
						<h3>Tercera etapa:</h3><p><h3>Acercar la documentacion y transparencia a padres y apoderados...</h3></p>
					</div>
				
					<div class="tercera no-se-ve articulo col-10 text-blanco text-justificado">
				
						<p>
							La primera etapa de colegios en red estará focalizada en canalizar el costo monetario de las responsabilidades escolares y a su vez permitir el desarrollo de una comunidad escolar comprometida con la realidad socio-cultural y económica de todos los involucrados.
							En esta etapa se desarrollará un portal filtrado por colegios en el cual permitiremos la publicación de artículos relacionados con el mundo escolar así, se permitirá la movilidad de artículos usados y nuevos como textos escolares, libros de lectura domiciliaria, uniformes, etc.. 
							Para esto los colegios interesados deberán inscribirse sin costo en nuestro sitio a través de un representante del colegio directamente o en su defecto del centro de padres.
						</p>
					</div>
				</div>

			</div><!-- fin contenedor -->

			<div class="contenedor bg-azul">
				<h1>FOOTER</h1>
			</div>

		<!-- /////////////////////////////////// FIN INGRESO ////////////////////// -->

			<div class=" ingreso pop bg-purpura text-center  text-blanco no-se-ve">
					<form action="login/verificar.php"  method="post">
							<br/>
							<img src="img/logo.png" alt="" >
							<br/>
							<br/>
							<br/>
							<p>usuario</p>
							<input type="text" name="user" ><br/><br/>
							<p>Password</p>
							<input type="password" name="pw" ><br/><br/>
							<button type="submit" class="btn btn-lg btn-purpura">INGRESAR</button><br/>
							<button class="btn btn-sm btn-purpura">REGISTRAR</button>
							<p ><h3 class="cerrar btn" onclick="hola('.ingreso','no-se-ve')">cerrar</h3></p>
					</form>		
			</div> 
		<!-- /////////////////////////////////// FIN INGRESO ////////////////////// -->


		<!-- /////////////////////////////////// REGISTRO USUARIO////////////////////// -->

			<div class=" registro pop bg-purpura text-center  text-blanco no-se-ve">
					<form action="login/registro.php" method="post">
						
						<p>rut</p>
						<input type="text" name="rut">
							<br/>
							<br/>
						<p>correo</p>
						<input type="mail" name="correo">
							<br/>
							<br/>
						<p>Password</p>
							<input type="password" name="pw" >
							<br/>
							<br/>
							<input type="submit" value="ingresar">
						<p ><h3 class="cerrar btn" onclick="hola('.registro','no-se-ve')">cerrar</h3></p>
					</form>
			</div>
			
		<!-- /////////////////////////////////// FIN REGISTRO USUARIO////////////////////// -->

		<!-- /////////////////////////////////// REGISTRO COLEGIO ////////////////////// -->

			<div class=" colegio pop bg-purpura text-center  text-blanco no-se-ve">
					<form action="login/registro.php" method="post">
						
						<p>rut</p>
						<input type="text" name="rut">
							<br/>
							<br/>
						<p>correo</p>
						<input type="mail" name="correo">
							<br/>
							<br/>
						<p>Password</p>
							<input type="password" name="pw" >
							<br/>
							<br/>
							<input type="submit" value="ingresar">
						<p ><h3 class="cerrar btn" onclick="hola('.colegio','no-se-ve')">cerrar</h3></p>
					</form>
			</div>
			
		<!-- /////////////////////////////////// FIN REGISTRO COLEGIO ////////////////////// -->

</body>
</html>