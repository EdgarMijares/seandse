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
			Calle <span>"Aqui la calle"</span>
			<span>Durango</span>
			<span>Dgo</span>
			CP. <span>34XXX</span>
		</div>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227.76258998007182!2d-104.66502396388364!3d24.023960664579615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc818adfa860b%3A0x8dcac33c738ea84a!2sDental+White+Smile!5e0!3m2!1ses-419!2smx!4v1501343679909" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

	<footer>
		<?php include("footer.html") ?>
	</footer>


	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>