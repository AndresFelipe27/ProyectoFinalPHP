<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>  Registro Cliente</title>
	<link rel="stylesheet" type="text/css" href="/proyectoFinalphp/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<script type="text/javascript" src="/proyectoFinalphp/js/jquery-2.1.4.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script src="//ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>
</head>

</body>

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

<section class="secc">Registrate como cliente:</section>

<div class="formulario">
	<form id="formU" method="POST" action="/proyectoFinalphp/home/registrarUsuario">
		<label>Nombre:</label>
		<input name="nombre" type="text" class="text" required>

		<label>Apellido:</label>
		<input name="apellido" type="text" class="text" required>

		<label>Cedula:</label>
		<input name="cedula" type="text" class="text" required>

		<label>Telefono:</label>
		<input name="telefono" type="text" class="text" required>

		<label>Direccion:</label>
		<input name="direccion" type="text" class="text" required>

		<label>Correo:</label>
		<input name="correo" type="text" class="text" required>
		
		<label>Contraseña:</label>
		<input name="contraseña" type="password" class="text" required>

		<input type="submit" class="bot" value="Registrar" id="bot">
	</form>	
</div>


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
</div>

<script type="text/javascript" src="/proyectoFinalphp/js/validaciones.js"></script>
</body>

</html>
