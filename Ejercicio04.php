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

	  <section class="hero is-link">
         <div class="hero-body">
            <p class="title">
              Arreglos en PHP
             </p>
         </div>
        </section>

    <section class ="section is-medium">
	<h1 class="title">DIAS DE LA SEMANA</h1>
	<h2 class="subtitle">
		<?php

			$semana = array("DOMINGO","LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO");

			foreach ($semana as $dia) {
				echo $dia . "<br>";
			}
		?>
	 </h2>
</section>     
	   
    <section class ="section is-medium">
	<h1 class="title">OTRAS FORMAS DE IMPRIMIR</h1>
	<h2 class="subtitle">
		
		<?php

			$asignaturas = array("POO","FUNDAMENTOS","FUN. DATOS");
			print_r($asignaturas);

			echo"<hr>";
			echo "<h1 clas='subtitle'> usando var_dump()</h1";
			var_dump($asignaturas);
			
			
		?>
	 </h2>
</section> 	   
	  
  
   </div>
</body>
</html>

