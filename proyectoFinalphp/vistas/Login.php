<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>  Login</title>
	<link rel="stylesheet" type="text/css" href="/proyectoFinalphp/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<script type="text/javascript" src="/proyectoFinalphp/js/jquery-2.1.4.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
</head>

<body>

<div class="arriba">

	<div class="a">

		<div class="b">
			<img src="/proyectoFinalphp/imagenes/l.png" >	
			<header>Subastas Web</header>
		</div>
	
		<nav class= "menu">
		<ul class="lista">
				<li class="li"><a href="/proyectoFinalphp/Home/registrarUsu">Registrar Cliente</a></li>
				<li class="li1"><a href="/proyectoFinalphp/Home/registrarEmp">Registrar Empresa</a></li>
				<li class="li2"><a class="a1" href="/proyectoFinalphp/Home/log">Login</a></li>
				<li class="li3"><a href="/proyectoFinalphp/Home/registrarPro">Registrar producto </a></li>
				<li class="li4"><a href="/proyectoFinalphp/Home/pujar">Comprar pujas</a></li>
				<li class="li5"><a href="/proyectoFinalphp/Home/verPro">Visualizar producto</a></li>
			</ul>
		</nav>

	</div>
</div>

<nav class="inicio"><ul>
<li><a href="/proyectoFinalphp/Home/index">Inicio</a></li>
</ul></nav>

<section class="secc">Logeate:</section>

<?php
	if(!isset($_COOKIE["chsm"])){
	?>
<div class="formulario">
	<form id="formL" method="POST" action="/proyectoFinalphp/home/login">
		<label>Usuario (correo):</label>
		<input name="usuario" type="text" class="text">

		<label>Contraseña:</label>
		<input name="contraseña" type="pass" class="text">

		<input type="submit" class="bot" value="Entrar">
	</form>	
</div>
	<?php
	}else{
		?>
		<a href="/proyectoFinalphp/home/logout">Cerrar Sesion</a>
		<?php }
		?>
<div class="abajo">
	<div class="cont">
	<div class="columna">
		<div>
			<h3>Acerca de Nosotros</h3>
			<article> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quidem, dolorem aperiam. Fuga pariatur aperiam omnis, repellendus impedit, similique dolorum laborum voluptates, ipsam tempore amet alias consequuntur facilis provident corporis.

		</div>

		<div>
			<h3>Contactenos!</h3>
			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quidem, dolorem aperiam. Fuga pariatur aperiam omnis, repellendus impedit, similique dolorum laborum voluptates, ipsam tempore amet alias consequuntur facilis provident corporis.

		</div>
	</div>

	<div class="columna">
		<div>
			<h3>¿ Quienes somos ?</h3>
			<article> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quidem, dolorem aperiam. Fuga pariatur aperiam omnis, repellendus impedit, similique dolorum laborum voluptates, ipsam tempore amet alias consequuntur facilis provident corporis.

		</div>

		<div>
			<h3>Mas</h3>
			<article>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quidem, dolorem aperiam. Fuga pariatur aperiam omnis, repellendus impedit, similique dolorum laborum voluptates, ipsam tempore amet alias consequuntur facilis provident corporis.

		</div>
	</div>
	</div>

	<footer class="fot">
		Desarrollado  por PureHobyPrograming 
	</footer>

<script type="text/javascript" src="/proyectoFinalphp/js/validaciones.js"></script>

</body>

</html>