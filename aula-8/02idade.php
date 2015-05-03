<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    /*	
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos. "; 

        O código acima apresenta erro,devido à falta de parâmetro, se o arquivo php for acessado diretamente. 
       	O código abaixo permite acessar o arquivo php diretamente sem apresentar erro por falta de parâmetro.
        Se o arquivo acessado for o html, ambos os códigos funcionam igualmente
        */

        $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date("Y") - $ano;
        echo "$nome é $sexo e tem $idade anos. ";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 