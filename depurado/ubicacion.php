<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubicación Se&Se</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/sass/materialize.min.css">
	<link rel="stylesheet" href="css/jquery.fullPage.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.min.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"">
	<style>
		body {
			background: url("img/map.png") center no-repeat;
			background-attachment: fixed;
			background-size: cover;
			padding-top: 0;
		}
		body section {
			margin-top: 70px;
		}
		body footer{
			position: fixed;
		}
	</style>
</head>
<body>
	<header>
		<?php include("menu.html") ?>
	</header>

	<section>
		<div class="mapa">
			<h3>¿Donde nos encuentras?</h3>
			<div class="direccion">
				Calle <span>Fuente de Cantos 422 Fracc. Las Fuentes</span>
				<span>Durango</span>
				<span>Dgo</span>
				CP. <span>34220</span>
			</div><br>
			<div id="map"></div>
		</div>
	</section>
	<footer>
		<?php include("footer.html") ?>
	</footer>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="js/menu.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mapa.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxNwzeqUgdTVMVEx_8WXZUWXMK1SlRRJY&callback=initMap"></script>
</body>
</html>