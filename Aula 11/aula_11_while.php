<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 10 de PHP</title>
	</head>
	<body>
        <?php
            $numero = isset($_GET["num"]) ? $_GET["num"] : 0;
            $operacao = isset($_GET["oper"]) ? $_GET["oper"] : 1;
            switch($operacao){
                case 1:
                    $resultado = $numero * 2;
                    break;
                case 2:
                    $resultado = $numero ^ 3;
                    break;
                case 3:
                    $resultado = sqrt($numero); // $n ^ (1/2)   ou   $n ^ (0.5)
            }
            echo "O resultado da operação solicitada foi <span class='foco'>$resultado</span>";
        ?>
        <a href="aula_10.1_exemplo.html" classe="botao">Voltar</a>
	</body>
</html>