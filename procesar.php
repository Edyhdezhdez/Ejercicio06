 	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arreglos</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			DATOS PERSONALES
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">


  			<?php

				$nombre = $_POST['nombre'];
				$edad = $_POST['edad'];
				$telefono = $_POST['telefono'];

				echo "<h1 class='is-subtitle'>";
				echo "Hola " . $nombre . ".";
				echo "<br>Tienes " . $edad . " años.";
				echo "<br>Tu número telefónico es: " . $telefono;
				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>
