<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 06 de PHP</title>
    </head>
	<body>
		<?php
            $preco = $_GET["p"];
            echo "O preço do produto é R$ ".number_format($preco, 2);
            $aumento = $preco;
            $aumento = $aumento + ($aumento*10/100);      
            echo "<br/> E o novo preço com 10% de aumento será R$ ".number_format($aumento, 2);
            $desconto = $preco;
            $desconto -= $desconto*10/100;
            echo "<br/> E o novo preço com 10% de desconto será R$ ".number_format($desconto, 2);
		?>
	</body>
</html>