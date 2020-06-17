<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 07 de PHP</title>
	</head>
	<body>
		<?php
            $num1 = $_GET["a"];
            $num2 = $_GET["b"];
            $tipo = $_GET["op"];
            echo"O valores informados foram $num1 e $num2 <br/>";
            $resultado = ($tipo == "soma")? $num1+$num2 : $num1*$num2;
            echo"O resultado da operação é $resultado";
		?>
	</body>
</html>