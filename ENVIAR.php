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

	<section class="hero is-warning">
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
				$Paterno = $_POST['Paterno'];
				$Materno = $_POST['Materno'];
				$Cargo = $_POST['Cargo']; 
				$RFC = $_POST['RFC'];
			    $CURP = $_POST['CURP'];
				$Domicilio = $_POST['Domicilio'];
				$Telefono = $_POST['Telefono'];
				$Electronico = $_POST['Electronico'];
				$Sexo  = $_POST['Sexo'];
				$Nacimiento  = $_POST['Nacimiento'];
				$Estado  = $_POST['Estado'];
				$Escolaridad = $_POST['Escolaridad'];
				$Referencia = $_POST['Referencia'];
				$Observaciones = $_POST['Observaciones'];
				

				echo "<h1 class='is-subtitle'>";
				echo "<br>Eres " . $nombre . " ";
				echo  $Paterno . " ";
				echo  $Materno . " ";
				echo  "<br>" . $Cargo . " ";
				echo  "<br>" . $RFC . ".";
				echo  "<br>" . $CURP . ".";
				echo  "<br>" . $Domicilio . ".";
				echo  "<br>" . $Telefono . ".";
				echo  "<br>" . $Electronico . ".";
				echo  "<br>" . $Sexo . ".";
				echo  "<br>" . $Nacimiento. ".";
				echo  "<br>" . $Estado . ".";
				echo  "<br>" . $Escolaridad . " ";
				echo  "<br>" . $Referencia . ".";
				echo  "<br>" . $Observaciones. ".";

				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>

</body>
</html>