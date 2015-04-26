<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<meta charset="UTF-8"/>
	<title>Curso de PHP - Curso em Vídeo</title>
</head>
<body>
	<div>
		<?php
			$a = 3;
			$b = "3";
			$r = ($a == $b)? "SIM":"NÃO"; //verifica se são iguais, independente do tipo
			echo "As variáveis A e B são iguais?<br/> $r";

			$r = ($a === $b)? "SIM":"NÃO"; //verifica se são iguais e do mesmo tipo
			echo "<br/>As variáveis A e B são idênticas?<br/> $r";
		?>
	</div>
</body>
</html> 
