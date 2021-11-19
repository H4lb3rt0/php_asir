<!DOCTYPE html>
<html>
	<body>
		<form action="whilenumerosprimos.php" method="GET">
			<input type="text" name="num">
			<input type="submit" name="sent" value="Sent">
		</form>

		<?php

		$num = $_GET['num'];

		$count = 2;

		while($count < $num){

			if($num % $count == 0){
				$count++;
			}
		}

		if($num == $count){
			echo $num." es primo.";
		}

		else{
			echo $num." no es primo.";
		}

		?>
	</body>
</html>

