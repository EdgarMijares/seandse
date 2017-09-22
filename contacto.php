<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contacto Se&Se</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="css/sass/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<link href="css/font-awesome.min.css" type="text/css"s rel="stylesheet">
	
	<style>
		body {
			background: url("img/map.png") center no-repeat;
			background-attachment: fixed;
			background-size: cover;
			padding-top: 0;
		}
		body section {
			margin-top: 90px;
		}
	</style>
</head>
<body>
	<header>
		<?php include("menu.html") ?>
	</header>
	<section>
		<form action="enviar.php" method="post" class="formulario"> 
			<div class="container ">
				<div class="row">
				</div>
				<div class="row">
					<div class="col s12 m6 pull-m0">
						<img src="img/logo.svg" width="80%" alt="Logo" class="">
					</div>
					<div class="col s12 m6 push-m0">
						<input type="text" placeholder="* Nombre" name="nombre" required>
						<input type="email" placeholder="* Correo" name="email" required>
						<input type="text" placeholder="* Telefono" name="tel" required>
						<textarea name="mensaje" placeholder="Mensaje:"></textarea>
						<div class="g-recaptcha" data-sitekey="6Lc03TAUAAAAAGtRtD1NjTMcv_tHt7Lp6w2wJIGk"></div>
						<input class="boton" type="submit" value="Enviar">
					</div>
				</div>
			</div>
		</form>
	</section>
	<footer>
		<?php include("footer.html") ?>
	</footer>


	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>