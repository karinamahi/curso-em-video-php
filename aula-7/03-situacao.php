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
			$nota1 = $_GET["n1"];
			$nota2 = $_GET["n2"];
			$media = ($nota1+$nota2)/2;
			echo "A média entre $nota1 e $nota2 é $media <br/>";
			$sit = ($media<6)?"REPROVADO":"APROVADO";
			echo "A situação do aluno é $sit";

		?>
	</div>
</body>
</html> 
