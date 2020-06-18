<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 07 de PHP</title>
	</head>
	<body>
		<?php
            //Mostre a situação de um aluno, de acordo com a sua média obtida.
            $nota1 = $_GET["a"];
            $nota2 = $_GET["b"];
            $media = ($nota1+$nota2)/2;

            echo "A média das notas $nota1 e $nota2 é igual a $media <br/>";
            echo "O Aluno foi ".(($media >= 6) ? "APROVADO" : "REPROVADO");
		?>
	</body>
</html>