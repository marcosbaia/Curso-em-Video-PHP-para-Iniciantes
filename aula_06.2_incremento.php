<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 06 de PHP</title>
    </head>
	<body>
		<?php
			$atual = $_GET["ano"];
			echo "O ano atual é: $atual <br/>";
			echo "<br/> O ano anterior é: " .--$atual;
			$atual++;
			echo "<br/> O ano futuro é: " .++$atual;
			//ano atual - ano anterior - ano futuro
		?>
	</body>
</html>