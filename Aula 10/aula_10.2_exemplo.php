<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 10 de PHP</title>
	</head>
	<body>
        <?php
            $dia = isset($_GET["ds"]) ? $_GET["ds"] : 0;
            switch ($dia){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                default:
                    echo "Dia da semana invalido";
            }
        ?>
        <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
	</body>
</html>