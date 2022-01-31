<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ejercicio 03</title>
<!-- Agregar bulma.min.css -->
<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>

<h1>Esto es una etiqueta H1</h1>
<?php echo '<h1>Esto es una etiqueta H1 dentro de un script de php</h1>' ?>

<h1>Variables en PHP</h1>

<?php
$nombre = "Edgar Hernandez Hernandez";
$edad = 20;
echo "Hola <strong>" . $nombre . "</strong><br>tienes " . $edad . " años.";
?>

<form action="#" method="post" >
	 <input type="submit" class="button is-primary" value="ENVIAR">  
    </form>

</body>
</html>