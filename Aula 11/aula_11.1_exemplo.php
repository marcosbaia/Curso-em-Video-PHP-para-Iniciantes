<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 11 de PHP</title>
	</head>
	<body>
        <?php
            echo 'Contagem Progressiva <br/><br/>';
            $contador = 1;
            while($contador <= 10){
                echo 'Incrementando '.$contador++.'<br/>';
            }
            echo '<br>Contagem Regressiva <br/></br>';

            while($contador > 1){
                echo 'Decrementando '.--$contador.'<br/>';
            }
        ?>
	</body>
</html>