<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css">
	<title>Curso de PHP - Curso em Video</title>
</head>

<body>
	<div>
		<?php
			$preco = $_GET["p"];
			echo "CALCULA AUMENTO";
			echo "<br/>O preço do produto é R$ " . number_format($preco,2);
			$preco += $preco*10/100;
			echo "<br/>O novo preço com 10% de aumento será R$ ". number_format($preco,2);

			$preco = $_GET["p"];
			echo "<br/><br/>CALCULA DESCONTO";
			echo "<br/>O preço do produto é R$ ". number_format($preco,2);
			$preco -= $preco*10/100;
			echo "<br/>O novo preço com 10% de desconto será R$ ". number_format($preco,2);

		?>
	</div>
</body>
</html>