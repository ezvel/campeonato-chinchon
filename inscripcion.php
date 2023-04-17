<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./estilos.css">
</head>
<body>
	<header>
		<div class="header__titular">
			<h1>CAMPEONATO DE CHINCHON</h1>
		</div>
		<nav class="header__nav">
			<ul>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./inscripcion.php">INSCRIPCION</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./participantes.php">PARTICIPANTES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./partidas.php">PARTIDAS</a></li>
				<li class="nav__item nav__item-impar--bg-lightness"><a href="./posiciones.php">POSICIONES</a></li>
				<li class="nav__item nav__item-par--bg-darkest"><a href="./seccion_administradores.php">SECCION ADMINISTRACION</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>Inscripcion</h2>
		<!-- Tabla para estructurar el formulario -->
		<table align="center">
			<!-- Formulario -->
			<form action="cargar_participante.php" method="get">

				<!-- Nombre -->
				<tr><td>Nombre</td></tr>
				<tr><td><input type="text" name="nombre"></td></tr>
				<!-- Apellido -->
				<tr><td>Apellido</td></tr>
				<tr><td><input type="text" name="apellido"></td></tr>

				<!-- Botones del formulario -->
				<tr><td><input type="reset" value="RESETEAR" class="negrita"></td></tr>
				<tr><td><input type="submit" value="INSCRIBIR"></td></tr>

			</form>
		</table>
	</main>
</body>
</html>