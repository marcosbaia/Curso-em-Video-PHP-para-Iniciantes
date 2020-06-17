<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 06 de PHP</title>
    </head>
	<body>
		<?php
            $a = 3;
            $b = $a;
            $b += 5;
            echo "Variável A vale $a";
            echo "<br/> Variável B vale $b <br/>";
            
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "<br/> VARIÁVEL POR REFERÊNCIA <br/>";
            echo "<br/> A variável A vale $a";
            echo "<br/> A variável B vale $b";
		?>
	</body>
</html>