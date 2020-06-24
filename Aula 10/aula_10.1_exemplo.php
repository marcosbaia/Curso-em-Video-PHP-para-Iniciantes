<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 10 de PHP</title>
	</head>
	<body>
        <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
            switch($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n); // $n ^ (1/2)   ou   $n ^ (0.5)
            }
            echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
        ?>
        <a href="aula_10.1_exemplo.html" classe="botao">Voltar</a>
	</body>
</html>