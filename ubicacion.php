<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ubicación Se&Se</title>

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
	
	<div class="mapa">
		<h3>¿Donde nos encuentras?</h3>
		<div class="direccion">
			Calle <span>Fuente de Cantos 422 Fracc. Las Fuentes</span>
			<span>Durango</span>
			<span>Dgo</span>
			CP. <span>34220</span>
		</div>
		<div id="map"></div>
	</div>

	<footer>
		<?php include("footer.html") ?>
	</footer>

	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mapa.js"></script>
    <script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxNwzeqUgdTVMVEx_8WXZUWXMK1SlRRJY&callback=initMap">
    </script>
</body>
</html>