<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<title>SE & SE</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="css/sass/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/font-awesome.min.css" type="text/css"s rel="stylesheet">
</head>
<body>
	<header>
		<?php include("menu.html") ?>
	</header>
	<div id="fullpage">
		<div class="pantalla-uno section">
			<div class="banner">
				<img src="img/logo.svg" alt="Logo" class="logo">
			</div>
		</div>
		<div class="pantalla-dos section">
			<div class="container">
				<div class="row">
					<div class="col s12 l6">
						<h3>Misión:</h3>
						<p> 
							Ser una empresa especialista de servicios de fletes, mudanzas y Transportación de bienes muebles y mercancías, brindándoles un servicio de alta 
							calidad logística en el cuidado de bienes y productos conun destino seguro, con un sello de honestidad y espíritu de servicio.
						</p>
					</div>
					<br>
					<div class="col s12 l5 offset-l7 secon">
						<h3>Visión:</h3>
						<p>Somos una empresa líder Mexicana de logística en Fletes, Mudanzas y Transportación de bienes Muebles y mercancías.</p>
					</div>
				</div>
				<div class="row">
					<div class="col l12 offset-m5 logo">
						<img src="img/logo.svg" alt="Logo" class="logo">
					</div>
				</div>
			</div>
		</div>
		<div class="pantalla-tres section">
			<div class="container">
				<div class="row">
					<div class="col s12 m3">
						<h3>Equipo</h3>
					</div>
					<div class="col s12 m9">
						<h3>Mercedez-Benz sprinter</h3>
					</div>
				</div>
				<div class="row">
					<div class="col s12 offset-m3">
						<div class="row">
							<div class="col s12 m6">
								<img src="img/mercedez.jpg" width="90%" alt="">
							</div>
							<div class="col s12 m4">
								<p>Dimensiones de cajaseca:</p>
								<p>Largo: 5.0mts.<br>Alto: 2.22mts.<br>Ancho: 2.20mts.</p><br>
								<p>Copete: <br>Largo: 1.20 mts. <br>Alto:0.95mts. <br>Ancho: 2.20mts</p><br>
								<p>Capacidad de Carga: 4.5 toneladas.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="pantalla-cuatro section">
			<div class="container">
				<div class="row">
					<p>Personal amable, físicamente aptos y equipados con  equipo de seguridad personal (Overoles, guantes, fajas de protección lumbar), con la finalidad de estar preparados para realizar las diferentes tareas encomendadas.</p><br>
					<img src="img/equipo.jpg" width="85%" class="center" alt="">
				</div>
			</div>
		</div>
		<div class="pantalla-cinco section">
			<div class="container">
				<div class="row">
					<h3 style="text-align: center;">Ford F-350</h3><br>
				</div>
				<div class="row">
					<div class="col s12 m6">
						<img src="img/ford.jpg" width="90%" alt="">
					</div>
					<div class="col s12 m5">
						<p>Capacidad de Carga: 3.5 toneladas.</p><br>
						<p>Dimensiones de cajaseca: <br>Largo: 3.44mts.<br>Alto:1.92mts. <br>Ancho: 2.38mts.</p><br>
						<p>Copete: <br>Largo: 0.78 mts. <br>Alto:1.04mts. <br>Ancho: 2.38mts.</p>							
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<?php include("footer.html") ?>
	</footer>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/vendor/jquery.easings.min.js"></script>
	<script type="text/javascript" src="js/vendor/scrolloverflow.min.js"></script>
	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>
		$(document).ready(fullpag);
		function fullpag() {
			$('#fullpage').fullpage({
				sectionsColor: ['#FFF', 'orange', '#C0C0C0', '#ADD8E6'],
				anchors:['index','acerca', 'equipo','',''],
				menu: '#myMenu'
			});
		}
	</script>
</body>
</html>