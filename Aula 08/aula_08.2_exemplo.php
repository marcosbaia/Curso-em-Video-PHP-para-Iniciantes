<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 08 de PHP</title>
	</head>
	<body>
        <?php
            $nome = isset($_GET["nome"])? $_GET["nome"] : "[não informado]";
            $ano = isset($_GET["ano"])? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[sem sexo]";
            $idade = date("Y") - $ano;
            echo "$nome e $sexo e tem $idade anos.";
        ?>
        <a href="aula_08.2_exemplo.html">Voltar</a>
	</body>
</html>