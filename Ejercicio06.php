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
			<form action="ENVIAR.php" method="post">
				<div>
					<label>Nombres:</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>
				<div>
					<label>Apellido Paterno:</label>
					<input class="input is-primary" type="text" name="Paterno" required>
				</div>
				<div>
					<label>Apellido Materno:</label>
					<input class="input is-primary" type="text" name="Materno" required>
				</div>

				<div>
					<label>Cargo:</label>
					<input class="input is-primary" type="text" name="Cargo" required>
				</div>

				<div>
					<label>RFC:</label>
					<input class="input is-primary" type="text" name="RFC" required>
				</div>
				<div>
					<label>Domicilio:</label>
					<input class="input is-primary" type="text" name="Domicilio" required>
				</div>
				<div>
					<label>CURP:</label>
					<input class="input is-primary" type="text" name="CURP" required>
				</div>
				<div>
					<label>Telefono:</label>
					<input class="input is-primary" type="tel" name="Telefono" required>
				</div>
				<div>
					<label>Correo Electronico:</label>
					<input class="input is-primary" type="text" name="Electronico" required>
				</div>
				<div>
					<label>Sexo</label>
					<input class="input is-primary" type="text" name="Sexo" required>
				</div>
				<div>
					<label>Fecha de Nacimiento:</label>
					<input class="input is-primary" type="text" name="Nacimiento" required>
				</div>
				<div>
					<label>Estado Civil:</label>
					<input class="input is-primary" type="text" name="Estado" required>
				</div>
				<div>
					<label>Escolaridad:</label>
					<input class="input is-primary" type="text" name="Escolaridad" required>
				</div>
				<div>
					<label>Referencia Familiar:</label>
					<input class="input is-primary" type="text" name="Referencia" required>
				</div>
				<div>
					<label>Observaciones:</label>
					<input class="input is-primary" type="text" name="Observaciones" required>
				</div>

				<CENTER>
				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
				</CENTER>

			</form>
		</div>

		<div class="column"></div>

	</section>

</body>
</html>