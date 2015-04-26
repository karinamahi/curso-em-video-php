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
			$ano = $_GET["ano"];
			$idade = 2015 - $ano;
			echo "Quem nasceu em $ano tem idade de $idade anos.";
			$tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO": "NÃO OBRIGATÓRIO";  //tipos de operadores logicos: && ou and; || ou or; xor
			echo("E dessa forma, seu voto é $tipo.")
		?>
	</div>
</body>
</html>
