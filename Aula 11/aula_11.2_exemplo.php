<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 11 de PHP</title>
	</head>
	<body>
        <div>
            <form method="get" action="aula_11.2_exemplo.php">
                <?php
                $contador = 1;
                while($contador <= 5){
                echo "Valor $contador: <input type='number' name='v$contador' max='100' min='0' value='0'/><br/>";
                $contador++;
                }
                ?>
                <input type="submit" value="Enviar" class="botao"/>
            </form>
        </div>
	</body>
</html>