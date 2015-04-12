<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css">
	<title>Operadores Aritméticos</title>
</head>

<body>
	<div>
		<?php
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			// valores recebidos pela url http://localhost/curso-em-video-php/aula-5/operadores.php?a=5&b=2 

			echo "<h2>Valores recebidos: $n1 e $n2</h2>"; 

			$m = ($n1 + $n2) / 2;

			echo "A soma vale ". ($n1 + $n2);
			echo "<br/>A subtração vale ". ($n1 - $n2);
			echo "<br/>A multiplicação vale ". ($n1 * $n2);
			echo "<br/>A divisão vale ". ($n1 / $n2);
			echo "<br/>O módulo vale ". ($n1 % $n2);
			echo "<br>A média vale $m" ;
		?>
	</div>
</body>
</html>