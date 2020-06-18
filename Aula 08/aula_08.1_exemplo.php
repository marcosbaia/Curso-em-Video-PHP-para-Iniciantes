<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 08 de PHP</title>
	</head>
	<body>
        <?php
            $valor = $_GET["v"];
            $raiz_quadrada = sqrt($valor);
            echo "A raiz do $valor é igual a ".number_format($raiz_quadrada,2);
        ?>
        <a href="aula_08.1_exemplo.html">Voltar</a>
	</body>
</html>