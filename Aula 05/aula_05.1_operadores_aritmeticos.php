<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 05 de PHP</title>
	</head>
	<body>
		<?php
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];
            
            echo"<br/> A Soma de -----------> $num1 + $num2 = ".($num1+$num2);
            echo"<br/> A Subtração de ------> $num1 - $num2 = ".($num1-$num2);
            echo"<br/> A Multiplicação de --> $num1 * $num2 = ".($num1*$num2);
            echo"<br/> A Divisão de --------> $num1 / $num2 = ".($num1/$num2);
            echo"<br/> O Modulo de ---------> $num1 % $num2 = ".($num1%$num2);
		?>
	</body>
</html>