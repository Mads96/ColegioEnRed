<?php
include("login/conexion.php");
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/mads.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/mads.js"></script>
	<title>colegios en red</title>
</head>
<body>
			<div class="cabecera col-10 bg-purpura">
			<div class="cabecera col-85 text-blanco"><h1>Colegios en red</h1><p class="col-10">Todo lo que pasa en tu colegio podria estar aquí.
			</p>
			<button class="btn-lg  btn-purpura " onclick="hola('.ingreso','no-se-ve')">INGRESAR</button>
			<button class="btn-lg  btn-purpura " onclick="hola('.registro','no-se-ve')">REGISTRAR</button>
			
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
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div><div class="articulo col-8 col-off-1 bg-purpura-trans">
					<div class="articulo"><h1>Hola mundo</h1></div>
				</div>

			</div>


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
						<p ><h1 class="cerrar btn" onclick="hola('.ingreso','no-se-ve')">cerrar</h1></p>
					</form>
					
				</div>
			<div class=" registro pop bg-purpura text-center  text-blanco no-se-ve">
					<form action="verificar.php" method="post">
						<br/>
						<img src="img/logo.png" alt="" >
						<br/>
						<br/>
						<br/>
						<p>colegio </p>
						<select name="insumos" required="required"> 
    <option value="">Selecciona un balasto de la lista</option> 
      <?php 
                   $con=mysql_connect($host, $user, $pw) or die("problemas con servidor");
					mysql_select_db($db, $con) or die("problemas con DB");

                    $comuna = mysql_query("SELECT * FROM comunas") 
                            or die("problemas en consulta:" . mysql_error()); 
                    ?> 
                            <?php 
                            while ($comunas = mysql_fetch_array($comuna)) { ?>
                                 
<option value="<?php echo $comunas['comuna_id']; ?>"><?php echo $comunas['comuna_nombre']; ?></option> 

                    <?php } ?> 
</select> 
<p><?php echo "hola". $comunas['comuna_nombre']; ?></p>
						<input type="text" name="colegio" ><br/><br/>
						<p>Nombre</p>
						<input type="text" name="user" ><br/><br/>
						<p>Rut</p>
						<input type="text" name="rut" ><br/><br/>
						<p>Fecha de nacimiento</p>
						<input type="date" name="cumple" ><br/><br/>
						<p>Password</p>
						<input type="password" name="pw" ><br/><br/>
						<input type="submit" value="ingresar">
						<p ><h1 class="cerrar btn" onclick="hola('.registro','no-se-ve')">cerrar</h1></p>
					</form>
				</div>
			
			
			
				

</body>
</html>