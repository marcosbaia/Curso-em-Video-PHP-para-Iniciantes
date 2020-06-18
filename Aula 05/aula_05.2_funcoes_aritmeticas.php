<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 05 de PHP</title>
	</head>
	<body>
		<?php
            $num1 = $_GET["x"];
            $num2 = $_GET["y"];
            
            echo"<br/> O Valor Absoluto de $num1 é: ".abs($num1);
            echo"<br/> O Valor Absoluto de $num2 é: ".abs($num2)."<br/>";
            echo"<br/>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br/>";
            echo"<br/> A Potenciação do $num1 <sup>$num2</sup>".pow($num1, $num2);
            echo"<br/> A Potenciação do $num2 <sup>$num1</sup>".pow($num2, $num1)."<br/>";
            echo"<br/>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br/>";
            echo"<br/> A Raiz Quadrada de $num1 é ".sqrt($num1);
            echo"<br/> A Raiz Quadrada de $num2 é ".sqrt($num2)."<br/>";
            echo"<br/>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br/>";
            echo"<br/> O Arredondamento do $num1 é ".round($num1);
            echo"<br/> O Arredondamento do $num2 é ".round($num2)."<br/>";
            echo"<br/> O Arredondamento para baixo $num1 é ".floor($num1);
            echo"<br/> O Arredondamento para baixo $num2 é ".floor($num2)."<br/>";
            echo"<br/> O Arredondamento para cima $num1 é ".ceil($num1);
            echo"<br/> O Arredondamento para cima $num2 é ".ceil($num2)."<br/>";
            echo"<br/>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br/>";
            echo"<br/> Parte Inteira do $num1 é ".intval($num1);
            echo"<br/> Parte Inteira do $num2 é ".intval($num2)."<br/>";
            echo"<br/>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br/>";
            echo"<br/> Formatação do valor $num1 em moeda é ".number_format($num1, 2, ",", ".");
            echo"<br/> Formatação do valor $num2 em moeda é ".number_format($num2, 2, ",", ".")."<br/>";
            echo"<br/>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=<br/>";
		?>
	</body>
</html>