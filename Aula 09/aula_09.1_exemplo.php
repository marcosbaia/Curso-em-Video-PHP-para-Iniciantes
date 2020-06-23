<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Aula 09 de PHP</title>
	</head>
	<body>
        <?php
            $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos. <br/>";
            if($i >= 18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            }
            else{
                $v = "não pode votar";
                $d = "não pode dirigir";
            }
            echo "Com essa idade voce $v e também $d";
        ?>
	</body>
</html>