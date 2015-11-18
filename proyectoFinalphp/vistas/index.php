<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Subastas Web</title>
	<link rel="stylesheet"  href="/proyectoFinalphp/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
	<script type="text/javascript" src="/proyectoFinalphp/js/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="/proyectoFinalphp/js/jquery.countdown.js"></script>
	<script type="text/javascript" src="/proyectoFinalphp/js/jquery.countdown.min.js"></script>
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

<div class="divimagen">
		<img src="/proyectoFinalphp/imagenes/s.jpg" >	
</div>
	
<div class="medio">

	<div id ="modif">
	<section class="sec">Productos Subastados</section>
	<?php
	include"modelos/Cliente.php";

	$cli = new Cliente();
	$pro= $cli-> consulta();
	$pro=$pro->fetchAll();

foreach ($pro as $row) {
	?>
	<div class = "pro">
		<img src="/proyectoFinalphp/imagenes/b.jpg"/>
		<h3 id="nom"><?php  echo $row["nombre"];?></h3>
		
	<div id="getting-started"></div>
<script type="text/javascript">
$().ready(function(){
 $('#getting-started').countdown('2015/01/01', function(event) {
    $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
  });
});
 
</script>
		<input type="submit" value="pujar">
		<input id="bot" type="button" value="Ver" onClick="window.location.href='/proyectoFinalphp/home/verPro'">	
	</div>

	<?php
}
?>
	</div>
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
			</article>
		</div>
	</div>
	</div>

	<footer class="fot">
		Desarrollado  por PureHobyPrograming 
	</footer>
</div>
</body>

</html>