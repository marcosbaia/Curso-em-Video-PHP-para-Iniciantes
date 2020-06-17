<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 07 de PHP</title>
	</head>
	<body>
		<?php
            //Mostre se um eleitor é obrigado a votar ou não.
            $ano = $_GET["a"];
            $idade = 2020 - $ano;

            echo "Pessoas nascidas no ano de $ano tem $idade anos de idade <br/>";
            echo "Seu voto é ".(($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO");
		?>
	</body>
</html>