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
      			Datos de persona
    		</p>
  		</div>
	</section>

	<section class="section is-medium columns">

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			<form action="procesar.php" method="post">
				<div>
					<label>Nombre:</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>

				<div>
					<label>Edad:</label>
					<input class="input is-primary" type="number" name="edad" min="0" max="120" required>
				</div>

				<div>
					<label>Teléfono</label>
					<input class="input is-primary" type="tel" name="telefono" required>
				</div>

				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>