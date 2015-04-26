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
			$n1 = $_GET["a"];
			$n2 = $_GET["b"];
			$tipo = $_GET["op"];

			//test: http://localhost/curso-em-video-php/aula-7/01-ternario.php?a=2&b=3&op=s
			echo "Os valores passados foram $n1 e $n2 <br/>";
			$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
			echo "O resultado será $r";
		?>
	</div>
</body>
</html>
