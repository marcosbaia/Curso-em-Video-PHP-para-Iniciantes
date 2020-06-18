<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 07 de PHP</title>
	</head>
	<body>
		<?php
            $a = 3;     # inteiro
            $b = "3";   # string
            $resultado = ($a == $b) ? "SIM" : "NÃO";
            echo "<br/> As variaveis A e B são iguais? $resultado";
            $resultado = ($a === $b) ? "SIM" : "NÃO";
            echo "<br/> As variaveis A e B são identicas? $resultado";

		?>
	</body>
</html>