<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 09 de PHP</title>
	</head>
	<body>
        <?php
            $valor1 = $_GET["n1"];
            $valor2 = $_GET["n2"];
            $media = (($valor1 + $valor2)/2);
            echo "A média entre $valor1 e $valor2 é igual a ".number_format($media,2);
            if($media < 5){
                $situacao = "REPROVADO";
            }elseif($media >= 5 && $media < 7){
                $situacao = "RECUPERAÇÃO";
                }else{
                $situacao = "APROVADO";
            }
            echo"<br/> Situação do aluno: $situacao <BR/>";
        ?>
        <a href="aula_09.3_exercicio.html">Voltar</a>
	</body>
</html>