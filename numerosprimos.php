<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="numerosprimos.php" method="GET">
			<input type="text" name="num">
			<input type="submit" name="enviar" value="Enviar">
		</form>

		<?php

			$num = $_GET['num'];
			
			$cont = 2;

			for($cont = 1; $cont < $num; $cont++){

				if($num % $cont == 0);

					$cont++;

			}

			if($num == $cont){

				echo $num." es un número primo.";

			}

			else{

				echo $num." no es un número primo";

			}

			
		?>
	</body>
</html>